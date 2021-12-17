<?php


require_once "../controllers/venda_service.php";
require_once "../controllers/cliente_service.php";
require_once "../Controllers/fechamento_service.php";

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
    
    <script src="./app.js"></script>
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

    <div class="container">

    <form action="../Controllers/fechamento_service.php?fechamentos" method="post">
        <div class="form-row">
            <div class="form-group col-12">
                <label for="cliente">Cliente</label>
                <select id="cliente" name="id_cliente" class="form-control">
                    <option selected>Escolha o cliente...</option>
                    <?php foreach ($clientes as $indice => $cliente) { ?>
                        <option value="<?php echo $cliente->id_cliente ?>"><?= $cliente->nome ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>

     
            <div class="form-group row">
                <label class="col-sm-12 col-form-label">Competência:</label>
                <div class="col-sm-12">
                    <select class="form-control-plaintext" id="competencia" name="competencia">
                        <option value="">-- Selecione </option>
                        <option value="2021-11">Novembro / 2021</option>
                        <option value="2021-12">Dezembro / 2021</option>
                        <option value="2022-01">Janeiro / 2022</option>
                        <option value="2022-02">Fevereiro / 2022</option>
                        <option value="2022-03">Março / 2022</option>
                    </select>
                </div>
            </div>

            <button type="submit" formtarget="_blank" id="fechamento" class="btn btn-block btn-outline-warning">ENVIAR</button>
        </form>

        <div class="row">
            <div class="col-12">
                <div id="#fechamentotodo">
                
                </div>
            </div>

        </div>



</html>