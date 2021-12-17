<?php


require "../Models/cliente_model.php";
// require_once "./Views/inserirCliente.php";

$Cliente = new Cliente();
$conexao = new Conexao();
$bd = new BD1($conexao,$Cliente);

//novo Cliente
if(isset($_GET['inserir']))
{
$nome = $_POST['nome'];
$nome_fantasia = $_POST['nome_fantasia'];
$telefone = $_POST['telefone'];
$cidade = $_POST['cidade'];
$cnpj = $_POST['cnpj'];
$Cliente->__set('nome',$nome);
$Cliente->__set('telefone',$telefone);
$Cliente->__set('cidade',$cidade);
$Cliente->__set('nome_fantasia',$nome_fantasia);
$Cliente->__set('cnpj',$cnpj);

$bd->inserir_cliente();
header('Location: ../../Views/home.php');
}
else if(isset($_GET['id']))
{
$id = $_GET['id'];
$bd->excluir($id);
header("Location: ../Views/home.php");
}
else if(isset($_GET['recuperarum'])){
    $id_cliente = $_GET['id_cliente'];
    $Cliente->__set('id',$id_cliente);
   $dados = $bd->recuperar_cliente();
    echo json_encode($dados);
}
else{
//ver Clientes
$clientes = $bd->recuperar_clientes();


}
?>