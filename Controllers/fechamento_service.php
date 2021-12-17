<?php
   require "../vendor/autoload.php";
require_once "../Controllers/conexao.php";
require_once "../Controllers/validador_acesso.php";
require_once "../Models/fechamento_model.php";
use Dompdf\Dompdf;
use Dompdf\Cpdf;

$fechamento = new Fechamento();
$conexao = new Conexao();
$bd = new BD2($conexao,$fechamento);
if(isset($_GET['fechamentos']))
{
$competencia = explode('-',$_POST['competencia']);
$ano = $competencia[0];
$mes = $competencia[1];
$id_cliente = $_POST['id_cliente'];
$dias_do_mes = cal_days_in_month(CAL_GREGORIAN,$mes,$ano);


$fechamento->__set('data_inicio',$ano. '-' .$mes.'-' .'01');
$fechamento->__set('data_fim',$ano. '-' .$mes.'-' .$dias_do_mes);
$fechamento->__set('id_cliente',$id_cliente);


$fechamentoDoCliente = $bd->recuperar_Fechamentos();
$valor= $bd->getValor();
// echo '<pre>';
// print_r($fechamentoDoCliente);
// echo '</pre>';


$html = '<div style="border: 4px outset rgb(97, 94, 94);margin-bottom: 2%;background-color: #F5F5F5;padding: 5px;">
<h1 style="text-align:center;color:rgb(20, 20, 24);font-family:Times, Times New Roman, serif;font-size: 2.5em;text-shadow: 1.2px 1.2px black;">New Vision Lab</h1>
</div><div style="border:1px solid black;padding:6px;"><div>Razão Social: '.$fechamentoDoCliente[0]['nome_cliente'] .'</div> <br><div>Nome Fantasia: '.$fechamentoDoCliente[0]['nome_fantasia'] .'</div><br>
     CNPJ:  '.$fechamentoDoCliente[0]['cnpj'] .'
     </div><br><br>
   ';
foreach($fechamentoDoCliente as $indice => $dado)
{
// instantiate and use the dompdf "

$novo ='<div style="text-align:center;padding:10px;font-size:20px;">'.'OS: '.$dado['os'] .'| Produto: ' .$dado['produto'] .' | Valor: ' .$dado['valor_da_venda'] .'</div><hr>';
$html .= $novo;
}
echo $html;

$dompdf = new Dompdf();
$html .= '<br><br><h4>TOTAL A PAGAR: R$ '.$valor.'</h4>';
$dompdf->loadHtml($html);


$dompdf->setPaper('A4', 'landscape');

$dompdf->render();

header('Content-type: application/pdf');

echo $dompdf->output();
// Output the generated PDF to Browser
//$dompdf->stream('fechamento.pdf');

}
?>