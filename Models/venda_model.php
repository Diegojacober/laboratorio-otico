<?php
require_once "../Controllers/conexao.php";
require_once "../Controllers/validador_acesso.php";

class Venda{

    public $data_inicio;
    public $data_fim;
    public $numero_de_vendas;
    public $id_produto;
    public $id_cliente;
    public $valorVenda;
    public $descricaoVenda;
    public $os;
    public $razao;
    public $nomefantasia;
    public $cnpj;

  
    public $total_de_despesas;

    public function __get($atributo)
    {
        return $this->$atributo;
    }

    public function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
        return $this;
    }
}


class BD{
    private $conexao;
    private $Venda;

    public function __construct(Conexao $conexao,Venda $Venda)
    {
        $this->conexao = $conexao->conectar();
        $this->Venda = $Venda;
    }

    public function inserir_venda(){
        print_r($this);
        $query= 'INSERT INTO tb_vendas ( valor_da_venda, produto, id_produto, id_cliente,os,nome_cliente,nome_fantasia,cnpj) 
        VALUES 
        ( :valor, :Venda, :id_produto, :id_cliente,:os,:nome_cliente,:nome_fantasia,:cnpj)';

        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':valor',$this->Venda->__get('valorVenda'));
        $stmt->bindValue(':Venda',$this->Venda->__get('descricaoVenda'));
        $stmt->bindValue(':id_produto',$this->Venda->__get('id_produto'));
        $stmt->bindValue(':id_cliente',$this->Venda->__get('id_cliente'));
        $stmt->bindValue(':nome_cliente',$this->Venda->__get('razao'));
        $stmt->bindValue(':nome_fantasia',$this->Venda->__get('nomefantasia'));
        $stmt->bindValue(':os',$this->Venda->__get('os'));
        $stmt->bindValue(':cnpj',$this->Venda->__get('cnpj'));
        $stmt->execute();

    
    }

    public function recuperar_Vendas($limit,$offset){
        $query ="select idvenda,os,nome_fantasia,nome_cliente,valor_da_venda,produto,id_produto,id_cliente,DATE_FORMAT(data_venda,'%d/%m/%Y %H:%i') as data
        FROM tb_vendas
         order by data_venda desc
         limit
         $limit
         offset
        $offset";
		$stmt = $this->conexao->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);

    }

    public function excluir($id){
        $query= "DELETE from tb_Vendas where idvenda = :id;";
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':id',$id);
        $stmt->execute();
       
      
    }
    public function getTotalregistros(){
        $query = "select count(*) as total
        FROM tb_vendas as t";
        $stmt = $this->conexao->prepare($query);
        $stmt->execute();
    
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

  


}


?>