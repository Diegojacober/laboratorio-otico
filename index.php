

<html lang="pt-br">
  <head>
 
    <meta charset="utf-8" />
    <title>New Vision Lab</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <style>
     body {
    font-family: "Lato", sans-serif;
}



.main-head{
    height: 150px;
    background:url('fundo.png');
   
}

.sidenav {
    height: 100%;
 
    background:url('./logo.png') no-repeat;
    background-size: 100% 100%;
    overflow-x: hidden;
    padding-top: 20px;
}


.main {
    padding: 0px 10px;
}

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
}

@media screen and (max-width: 450px) {
    
    .login-form{
        margin-top: 10%;
    }

    .register-form{
        margin-top: 10%;
    }
}

@media screen and (min-width: 768px){
    .main{
        margin-left: 40%; 
    }

    .sidenav{
        width: 40%;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
    }

    .login-form{
        border:4px groove grey;
        background-color: lightgrey;
        
        margin-top: 20%;
        padding: 20px;
    }

    .register-form{
        margin-top: 20%;
    }
}

#log{
    text-align: center;
    border-bottom: 1px solid black;
    text-transform: uppercase;
    text-shadow: 1px 1px black;
}

.login-main-text{
    margin-top: 20%;
    padding: 60px;
    color: #fff;
}

.login-main-text h2{
    font-weight: 300;
}

.btn-black{
    background-color: #000 !important;
    color: #fff;
}
    </style>
  </head>
<body style="background:url('fundo.png');
background-size: 50px 650px;
">
  <div class="sidenav">
    
      </div>
    
      <div class="main">
      
         <div class="col-md-12 col-sm-12">
         
            <div class="login-form">
            <h3 id="log">Faça Login para continuar</h3>
               <form  action="./Controllers/valida_login.php" method="post">
                  <div class="form-group">
                     <label class="text-primary">Usuario</label>
                     <input type="text" name="email" class="form-control" placeholder="usuario@user.com">
                  </div>
                  <div class="form-group">
                     <label  class="text-primary">Senha</label>
                     <input type="password" name="senha" class="form-control" placeholder="Senha">
                  </div>
                  <?php if(isset($_GET['login']) && $_GET['login'] == 'erro'){?>

                    <div class="text-danger">
                    Usuário ou senha inválido(s)
                    </div>

                    <?php } ?>
                    <?php if(isset($_GET['login']) && $_GET['login'] == 'erro2'){?>

                    <div class="text-danger">
                    Por favor, faça login antes de acessar as páginas protegidas
                    </div>

                    <?php } ?>
                  <button type="submit" class="btn btn-block btn-outline-dark">Entrar</button>
                 
               </form>
            </div>
         </div>
      </div>
      <body>
</html>