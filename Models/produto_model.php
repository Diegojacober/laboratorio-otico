<?php

class Produto{

public $data_inicio;
public $data_fim;
public $numero_de_vendas;
public $total_de_vendas;
public $clientes_ativos;
public $valorProduto;
public $descricaoProduto;
public $id;


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


class Acoes{
private $conexao;
private $Produto;

public function __construct(Conexao $conexao,Produto $Produto)
{
	$this->conexao = $conexao->conectar();
	$this->Produto = $Produto;
}

public function inserir_produto(){
	$query= "INSERT INTO tb_produtos (id_produto, valor, descricao) VALUES (NULL, :valor, :descricao);";

	$stmt = $this->conexao->prepare($query);
	$stmt->bindValue(':valor',$this->Produto->__get('valorProduto'));
	$stmt->bindValue(':descricao',$this->Produto->__get('descricaoProduto'));
	$stmt->execute();


}

public function recuperar_produtos(){
	$query= "select id_produto,valor,descricao from tb_produtos;";

	$stmt = $this->conexao->prepare($query);
	$stmt->execute();
   
  return $stmt->fetchAll(PDO::FETCH_OBJ);

}

public function excluir($id){
	$query= "
	SET FOREIGN_KEY_CHECKS=0;
	DELETE from tb_produtos where id_produto = :id;
	SET FOREIGN_KEY_CHECKS=1;";
	$stmt = $this->conexao->prepare($query);
	$stmt->bindValue(':id',$id);
	$stmt->execute();
   
  
}

public function atualizar()
{
	$query = '
	update tb_produtos set valor = :valor, descricao = :descricao
	where id_produto = :id;
';
   $stmt = $this->conexao->prepare($query);
   $stmt->bindValue(':id',$this->Produto->__get('id'));
   $stmt->bindValue(':valor',$this->Produto->__get('valorProduto'));
   $stmt->bindValue(':descricao',$this->Produto->__get('descricaoProduto'));
   $stmt->execute(); 
}




}