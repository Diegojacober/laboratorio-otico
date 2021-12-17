<?php

require_once "../Controllers/conexao.php";
require_once "../Controllers/validador_acesso.php";

class Dashboard{

    public $data_inicio;
    public $data_fim;
    public $numero_de_vendas;
    public $total_de_vendas;
    public $clientes_ativos;
    public $valorProduto;
    public $descricaoProduto;
    public $total_de_produtos;
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
    private $dashboard;

    public function __construct(Conexao $conexao,Dashboard $dashboard)
    {
        $this->conexao = $conexao->conectar();
        $this->dashboard = $dashboard;
    }

    public function get_numero_de_vendas(){
        $query= 'select count(*) as numero_vendas from tb_vendas where data_venda between :data_inicio and :data_fim';

        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':data_inicio',$this->dashboard->__get('data_inicio'));
        $stmt->bindValue(':data_fim',$this->dashboard->__get('data_fim'));
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_OBJ)->numero_vendas;
    }

    public function get_total_de_vendas(){
        $query= 'select SUM(valor_da_venda) as total_vendas from tb_vendas  where data_venda between :data_inicio and :data_fim';

        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':data_inicio',$this->dashboard->__get('data_inicio'));
        $stmt->bindValue(':data_fim',$this->dashboard->__get('data_fim'));
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_OBJ)->total_vendas;
    }
    public function get_total_de_produtos(){
        $query= 'select COUNT(*) as total_produtos from tb_produtos';

        $stmt = $this->conexao->prepare($query);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_OBJ)->total_produtos;
    }


    public function get_clientes_ativos(){
        $query= 'select count(*) as total_ativos from tb_clientes  where cliente_ativo = 1';

        $stmt = $this->conexao->prepare($query);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_OBJ)->total_ativos;
    }

 
  


}

$dashboard = new Dashboard();
$conexao = new Conexao();

$competencia = explode('-',$_GET['competencia']);
$ano = $competencia[0];
$mes = $competencia[1];

$dias_do_mes = cal_days_in_month(CAL_GREGORIAN,$mes,$ano);


$dashboard->__set('data_inicio',$ano. '-' .$mes.'-' .'01');
$dashboard->__set('data_fim',$ano. '-' .$mes.'-' .$dias_do_mes);

//novo produto

$bd = new BD($conexao,$dashboard);



$dashboard->__set('numero_de_vendas',$bd->get_numero_de_vendas());
//print_r($bd->get_numero_de_vendas());
$dashboard->__set('total_de_vendas',$bd->get_total_de_vendas());
//print_r($bd->get_total_de_vendas());
$dashboard->__set('clientes_ativos',$bd->get_clientes_ativos());
$dashboard->__set('total_de_produtos',$bd->get_total_de_produtos());




echo json_encode($dashboard);


?>