<?php
require_once "../Controllers/conexao.php";
require_once "../Controllers/validador_acesso.php";

class Fechamento{

    public $data_inicio;
    public $data_fim;
    public $id_produto;
    public $id_cliente;
    public $valorFechamento;

  
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


class BD2{
    private $conexao;
    private $Fechamento;

    public function __construct(Conexao $conexao,Fechamento $Fechamento)
    {
        $this->conexao = $conexao->conectar();
        $this->Fechamento = $Fechamento;
    }

    public function recuperar_Fechamentos(){
        $query ="select cnpj,nome_cliente,nome_fantasia,idVenda,os,valor_da_venda,produto,id_produto,id_cliente,DATE_FORMAT(data_venda,'%d/%m/%Y %H:%i') as data
        FROM tb_vendas
        where  data_venda between :data_inicio and :data_fim and id_cliente = :id_cliente
       order by data_venda DESC
         ";
		$stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':data_inicio',$this->Fechamento->__get('data_inicio'));
        $stmt->bindValue(':data_fim',$this->Fechamento->__get('data_fim'));
        $stmt->bindValue(':id_cliente',$this->Fechamento->__get('id_cliente'));
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }

 
    public function getValor(){
        $query= 'select SUM(valor_da_venda) as total from tb_vendas where data_venda between :data_inicio and :data_fim and id_cliente = :id_cliente';

        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':data_inicio',$this->Fechamento->__get('data_inicio'));
        $stmt->bindValue(':data_fim',$this->Fechamento->__get('data_fim'));
        $stmt->bindValue(':id_cliente',$this->Fechamento->__get('id_cliente'));
		$stmt->execute();

        return $stmt->fetch(PDO::FETCH_OBJ)->total;
    }

  


}


?>