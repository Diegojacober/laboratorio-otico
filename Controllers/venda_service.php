<?php

require "../Controllers/validador_acesso.php";
require "../Models/venda_model.php";


$Venda = new Venda();
$conexao = new Conexao();
$bd = new BD($conexao,$Venda);

//novo Venda
if(isset($_GET['inserir']))
{

$valor = $_POST['valor'];
$descricao = $_POST['descricao'];
$id_cliente = $_POST['id_cliente'];
$id_produto = $_POST['produto'];
$razao =$_POST['razao'];
$nome_fantasia = $_POST['nomef'];
$os = $_POST['os'];
$cnpj = $_POST['cnpj'];

$Venda->__set('valorVenda',$valor);
$Venda->__set('descricaoVenda',$descricao);
$Venda->__set('id_cliente',$id_cliente);
$Venda->__set('id_produto',$id_produto);
$Venda->__set('razao',$razao);
$Venda->__set('nomefantasia',$nome_fantasia);
$Venda->__set('os',$os);
$Venda->__set('cnpj',$cnpj);

$bd->inserir_Venda();

header('Location: ../../Views/verVendas.php');
}
else if(isset($_GET['id']))
{
$id = $_GET['id'];
$bd->excluir($id);
header("Location: ../Views/verVendas.php");
}
else{
//ver Vendas
$total_registros_pagina = 8;
$pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 1 ;
$deslocamento = ($pagina - 1) * $total_registros_pagina;
$vendas = $bd->recuperar_Vendas($pagina,$deslocamento);

$pagina_ativa = $pagina;

$vendas = $bd->recuperar_Vendas($total_registros_pagina,$deslocamento);
$pagina_ativa = $pagina;
$vendas = $vendas;
$total_vendas = $bd->getTotalregistros();
$total_de_paginas = ceil($total_vendas->total/$total_registros_pagina);
}
?>