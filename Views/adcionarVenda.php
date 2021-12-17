<?php


require "../controllers/produto_service.php";
require "../controllers/cliente_service.php";
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
		
        <script src="app.js"></script>
    
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
    <div class="container">
<form method="post" action="../Controllers//venda_service.php?inserir">
  
<div class="form-row">
    <div class="form-group col-5">
      <label for="cliente">Cliente</label>
      <select id="id_cliente" name="id_cliente" class="form-control">
        <option selected>Escolha o cliente...</option>
        <?php foreach($clientes as $indice => $cliente) { ?>
        <option value="<?php echo $cliente->id_cliente ?>"><?= $cliente->nome ?></option>
        <?php } ?>
      </select>
    </div>

    <div class="form-group col-4">
      <label for="razao">RAZÃO SOCIAL: </label>
      <input type="text" id="razao" name="razao" class="form-control" readonly>
    </div>

    <div class="form-group col-,">
      <label for="cnpj">CNPJ: </label>
      <input type="text" id="cnpj" name="cnpj" class="form-control" readonly>
    </div>

    <div class="form-group col-12">
      <label for="nomef">NOME FANTASIA: </label>
      <input type="text" id="nomef" name="nomef" class="form-control" readonly>
    </div>

    <div class="form-group col-12">
      <label for="produto">Produto</label>
      <select id="produto" name="produto" class="form-control">
        <option selected>Escolha o ID do Produto...</option>
        <?php foreach($produtos as $indice => $produto) { ?>
        <option value="<?= $produto->id_produto ?>"><?= $produto->id_produto ?>--<?php echo $produto->descricao ?></option>
       
        <?php } ?>
      </select>
    </div>



    <div class="form-group col-8">
      <label for="descricao">Produto</label>
      <select id="descricao" name="descricao" class="form-control">
        <option selected>Escolha o produto...</option>
        <?php foreach($produtos as $indice => $produto) { ?>
        <option value="<?php echo $produto->descricao ?>"> <?php echo $produto->descricao ?></option>
        <?php } ?>
      </select>
    </div>

    <div class="form-group col-4">
      <label for="valor">Valor:</label>
      <select id="valor" name="valor" class="form-control">
        <option selected>Selecione o valor...</option>
        <?php foreach($produtos as $indice => $produto) { ?>
        <option value="<?= $produto->valor ?>"><?= $produto->valor ?></option>
        <?php } ?>
      </select>
    </div>
   
    <div class="form-group col-12">
      <label for="os">OS:</label>
      <input type="text" id="os" name="os" class="form-control">
    </div>
  <button type="submit" class="btn btn-block btn-outline-dark">Cadastrar</button>
</form>
</div>
</div>


</body>
</html>