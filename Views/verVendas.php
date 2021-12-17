<?php


require_once "../controllers/venda_service.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	    <link rel="stylesheet" href="../style.css">

		<!-- script -->
		<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		
        <script src="../controllers/script.js"></script>
</head>
<body style="overflow-x:hidden;">
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
   
    <div class="container" >
    <?php
foreach($vendas as $indice => $venda)
{
    ?>
   <div class="card mb-2" style="border:3px double blue">
  <div class="card-body">
  <h5 class="card-title"><small>ID do cliente:</small> <?= $venda->id_cliente ?></h5>
    <h6 class="card-title"><small>Data da Venda:</small> <?= $venda->data ?></h6>
    <h6 class="card-subtitle mb-2 text-muted">R$<?= $venda->valor_da_venda ?></h6>
	<h6 class="card-subtitle mb-2 text-muted">OS do Cliente: <?= $venda->os ?></h6>
    <h6 class="card-text"><?= $venda->produto ?></h6>
    <a href="../controllers/venda_service.php?id=<?php echo $venda->idvenda ?>" id="exluir"><i class="fas fa-trash text-danger"></i></a>
   
  </div>
</div>
  


<?php }
?>
</div>


      <div class="row mt-5 ml-4">
		<nav aria-label="...">
		<ul class="pagination">
			<li class="page-item  <?=$pagina_ativa == $i ? 'active' : '' ?>">
			<a class="page-link " href="?pagina=1" tabindex="-1">Primeira</a>
			</li>
			<?php for($i = 1; $i <= $total_de_paginas; $i++)
			{ ?>
			<li class="page-item <?=$pagina_ativa == $i ? 'active' : '' ?>"><a class="page-link" href="?pagina=<?php echo $i;?>"><?= $i ?></a></li>
			<?php } ?>
			<li class="page-item <?=$pagina_ativa == $i ? 'active' : '' ?>">
			<a class="page-link " href="?pagina=<?php echo $total_de_paginas;?>">Ultima</a>
			</li>
		</ul>
		</nav>
		</div>
 
</body>
</html>