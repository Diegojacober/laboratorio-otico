<?php

require_once "../Controllers/conexao.php";

class Cliente{

public $data_inicio;
public $data_fim;
public $numero_de_vendas;
public $total_de_vendas;
public $clientes_ativos;
public $valorProduto;
public $descricaoProduto;
public $nome_fantasia;
public $id;
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


class BD1{
private $conexao;
private $Produto;

public function __construct(Conexao $conexao, Cliente $Cliente)
{
    $this->conexao = $conexao->conectar();
    $this->Cliente = $Cliente;
}

public function inserir_cliente(){
    $query= "INSERT INTO `tb_clientes` (`nome`, `telefone`,`cidade`,nome_fantasia,cnpj) VALUES ( :nome, :telefone, :cidade,:nome_fantasia,:cnpj);";

    $stmt = $this->conexao->prepare($query);
    $stmt->bindValue(':nome',$this->Cliente->__get('nome'));
    $stmt->bindValue(':telefone',$this->Cliente->__get('telefone'));
    $stmt->bindValue(':cidade',$this->Cliente->__get('cidade'));
    $stmt->bindValue(':nome_fantasia',$this->Cliente->__get('nome_fantasia'));
    $stmt->bindValue(':cnpj',$this->Cliente->__get('cnpj'));
    $stmt->execute();


}

public function recuperar_clientes(){
    $query= "
    select id_cliente, nome, telefone,cidade,nome_fantasia,cnpj from tb_clientes;
    
   ";

    $stmt = $this->conexao->prepare($query);
    $stmt->execute();
   
  return $stmt->fetchAll(PDO::FETCH_OBJ);

}

public function recuperar_cliente(){
    $query= "
    select id_cliente, nome, telefone,cidade,nome_fantasia,cnpj from tb_clientes where id_cliente = :id;
    
   ";

    $stmt = $this->conexao->prepare($query);
    $stmt->bindValue(':id',$this->Cliente->__get('id'));
    $stmt->execute();
   
  return $stmt->fetchAll(PDO::FETCH_OBJ);

}

public function excluir($id){
    $query= "
    SET FOREIGN_KEY_CHECKS=0;
    DELETE from tb_clientes where id_cliente = :id;
    SET FOREIGN_KEY_CHECKS=1;";
    $stmt = $this->conexao->prepare($query);
    $stmt->bindValue(':id',$id);
    $stmt->execute();
   
  
}

}