<?php
class Conexao{
    private $host = '127.0.0.1:3307';
    private $dbname = 'matheus2';
    private $user ="root" ;
    private $pass = '' ;

    public function conectar(){
        
        try{

            $conexao = new PDO(
                "mysql:host=$this->host;dbname=$this->dbname",
                "$this->user",
                "$this->pass"
            );
            $conexao->exec('set charset utf8');

           return $conexao;
           
        }
        catch(PDOException $e){
            echo '<p>' .$e->getMessage() .'</p>';
        }
    }
}
?>