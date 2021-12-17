<?php

require_once "../controllers/produto_service.php";
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
		

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />

        <script src="../Views/app.js"></script>
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
  
    <?php
foreach($produtos as $indice => $produto)
{
    ?>
    <div class="card mb-4">
  <div class="card-header">
    <h5>Produto</h5> <small id="idp"><?php echo $produto->id_produto ?></small>
  </div>
  <div class="card-body" style="text-align: center;">
    <blockquote class="blockquote mb-0">
      <h4><?php echo $produto->descricao .'<br>';  ?></h4>
      <footer class="footer text-success">R$ <?php echo $produto->valor ?><br>
      <a href="../controllers/produto_service.php?id=<?php echo $produto->id_produto ?>" id="exluirp"><i class="fas fa-trash text-danger"></i></a>
      <a href="#ex1" rel="modal:open"><i class="fas fa-pencil-alt ml-4"></i></a>

              <!-- Modal HTML embedded directly into document -->
              <div id="ex1" class="modal">
              <div class="form-group">
                <form method="post" action="../Controllers/produto_service.php?atualizarid=<?php echo $produto->id_produto ?>">
    <label for="descricaon">Descrição do Produto:</label>
    <input type="text" class="form-control"  name="descricao" required>
  </div>
  <div class="form-group">
  <label for="valorn">Valor do Produto:</label>
        <input  class="form-control" type="text" name="valor"  required>
  </div>
  <a href="#" rel="modal:close" class="btn btn-danger">Cancelar</a>
  <button type="submit" class="btn btn-outline-primary">Atualizar</button>
</div>
</form>

<!-- Link to open the modal -->

    </footer>
    </blockquote>
  </div>
</div>
  


<?php }
?>
</div>



</body>
</html>