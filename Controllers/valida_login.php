<?php

session_start();


//VARIAVEL QUE VERIFICA SE A AUTENTICAÇÃO FOI REALIZADA
$usuario_autenticado = false;
$usuario_id = null;
$usuario_perfil_id = null;

$perfis = array(1 => 'Administrativo', 2=> 'Usuário');

//USUARIOS DO SISTEMA
$usuarios_app = array(
    array('id'=>1,'email' => 'adm@administrador.com', 'senha' => '123456','perfil_id'=> 1)
);


foreach($usuarios_app as $user){
  
    if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
        $usuario_autenticado = true;
        $usuario_id = $user['id'];
        $usuario_perfil_id = $user['perfil_id'];
    }
}

    if($usuario_autenticado){

        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['id'] = $usuario_id;
        $_SESSION['perfil_id'] = $usuario_perfil_id;
        header('Location: ../Views/home.php');
    }else{  
        $_SESSION['autenticado'] = 'NÃO';
        header('Location: ../index.php?login=erro');
      }


?>