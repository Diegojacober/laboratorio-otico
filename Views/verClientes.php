<?php

require_once "../controllers/validador_acesso.php";
require_once "../controllers/cliente_service.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	 

		<!-- script -->
		<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		
        <script src="../controllers/script.js"></script>
</head>
<body style="background-color: grey;" >

<nav class="navbar navbar-dark bg-dark">

<a class="navbar-brand" href="#">

<i class="fas fa-glasses "></i>

  New Vision Lab

</a>

<ul class="navbar-nav">

  <li class="nav-item">

<a href="../Views/home.php" class="nav-link">

HOME

</a>

</li>

</ul>

</nav>

   
    <div class="container">
       
    <?php
foreach($clientes as $indice => $cliente)
{
    ?>
   <div class="card mb-3 bg-light mt-3" style="border:3px double blue">
  <div class="card-body">
    <h5 class="card-title"><small>Razão Social:</small> <?= $cliente->nome ?></h5>
    <h5 class="card-title"><small>Nome Fantasia: </small> <?= $cliente->nome_fantasia ?></h5>
    <h6 class="card-subtitle mb-2 text-muted">Telefone: <?= $cliente->telefone ?></h6>
    <p class="card-text">CNPJ: <?= $cliente->cnpj ?></p>
    <p class="card-text">Endereço: <?= $cliente->cidade ?></p>
    <p id="idcliente">ID: <?php echo $cliente->id_cliente ?></p>
    <a href="../controllers/cliente_service.php?id=<?= $cliente->id_cliente ?>" id="excluir" class="card-link text-danger">Excluir</a>
    
   
  </div>
</div>
  


<?php }
?>
</div>
</body>
</html>