<?php

require_once "../controllers/validador_acesso.php";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- estilos -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	    <link rel="stylesheet" href="../style.css">

		<!-- script -->
		<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		
        <script src="../controllers/script.js"></script>
</head>
<body>
    
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


    <form action="../Controllers/cliente_service.php?inserir" method="post" class="container">
    <div class="form-group">
    <label for="nome">Razão Social:</label>
    <input type="text" class="form-control" name="nome" id="nome" required>
  </div>
  <div class="form-group">
    <label for="nome_fantasia">Nome Fantasia:</label>
    <input type="text" class="form-control" name="nome_fantasia" id="nome_fantasia" required>
  </div>
  <div class="form-group">
  <label for="telefone">Telefone do Cliente:</label>
        <input  class="form-control" type="text" name="telefone" id="telefone" required>
  </div>
  <div class="form-group">
  <label for="cnpj">CNPJ:</label>
        <input  class="form-control" type="text" name="cnpj" id="cnpj" required>
  </div>
  <div class="form-group">
        <label for="cidade">Endereço:</label>
        <input  class="form-control" type="text" name="cidade" id="cidade" required>
  </div>

        <button type="submit" class="btn btn-block btn-outline-success">CADASTRAR</button>
    </form>
</body>
</html>