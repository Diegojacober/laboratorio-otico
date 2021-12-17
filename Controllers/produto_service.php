<?php

require "../Controllers/validador_acesso.php";
require_once "../Controllers/conexao.php";
require "../Models/produto_model.php";
// require_once "./Views/inserirProduto.php";

$Produto = new Produto();
$conexao = new Conexao();
$bd = new Acoes($conexao,$Produto);

//novo produto
if(isset($_GET['inserir']))
{
	$valor = $_POST['valor'];
	$descricao = $_POST['descricao'];
 $Produto->__set('valorProduto',$valor);
 $Produto->__set('descricaoProduto',$descricao);
 $bd->inserir_produto();
 header("Location: ../Views/home.php");
}
else if(isset($_GET['id']))
{
$id = $_GET['id'];
$bd->excluir($id);
header("Location: ../Views/verprodutos.php");
}
else if(isset($_GET['atualizarid']))
{
$id = $_GET['atualizarid'];
$valor = $_POST['valor'];
$descricao = $_POST['descricao'];
 $Produto->__set('valorProduto',$valor);
 $Produto->__set('descricaoProduto',$descricao);
 $Produto->__set('id',$id);

echo '<pre>';
print_r($Produto);
echo '</pre>';
$bd->atualizar();
header("Location: ../Views/verprodutos.php");
}
else{
//ver produtos
$produtos = $bd->recuperar_produtos();
}

?>