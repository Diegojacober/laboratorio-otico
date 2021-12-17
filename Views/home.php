<?php 

require_once "../Controllers/validador_acesso.php";

 // echo $_SESSION['perfil_id']

?>



<html lang="pt-br">

  <head>

 

    <meta charset="utf-8" />

    <title>New Vision Lab </title>



   <!-- estilos -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  

		<!-- script -->
		<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="./app.js"></script>

    <style>

     #adicionar{

       color: green;

     

     }

      img{

        background-color: transparent;

      }

      .card-home {

        padding: 30px 0 0 0;

        width: 100%;

        margin: 0 auto;

      }
      body{
        overflow-x:hidden;
      }

    </style>

  </head>



  <body>



    <nav class="navbar navbar-dark bg-dark">

      <a class="navbar-brand" href="#">

      <i class="fas fa-glasses "></i>

        New Vision Lab

      </a>

      <ul class="navbar-nav">

        <li class="nav-item">

          <a href="../Controllers/logoff.php" class="nav-link">

          SAIR

          </a>

        </li>

      </ul>

    </nav>



    <div class="container">    
    <div style=" box-shadow: 4px 2px 5px royalblue ;border:2px inset blue;padding:15px;margin-top:5%;background:#CAE1FF
;">
    <div class="row">
		    		<div class="col">
						
						<form>
							<div class="form-group row">
								<label class="col-sm-9 col-form-label">Competência:</label>
								<div class="col-sm-3">
									<select class="form-control-plaintext" id="competencia">
										<option value="">-- Selecione </option>
									
										<option value="2021-11">Novembro / 2021</option>
										<option value="2021-12">Dezembro / 2021</option>
										<option value="2022-01">Janeiro / 2022</option>
										<option value="2022-02">Fevereiro / 2022</option>
										<option value="2022-03">Março / 2022</option>
									</select>
								</div>
							</div>
						</form>

						<hr />

		    		</div>
		    	</div>
		    	
		    	<div class="row mb-3">
		    		<div class="col-md-6">
		    			<div class="card">
							<div class="card-header">
								Número de vendas
							</div>
							<div class="card-body">
								 <h5 id="nmrDevendas" class="card-title">?</h5>
							</div>
						</div>
					</div>

					<div class="col-md-6">
		    			<div class="card">
							<div class="card-header">
								Total de vendas
							</div>
							<div class="card-body">
								 <h5 id="totalDeVendas" class="card-title">?</h5>
							</div>
						</div>
		    		</div>

				</div>

				<div class="row mb-3">
					<div class="col-md-6">
		    			<div class="card">
							<div class="card-header">
								Total de Clientes
							</div>
							<div class="card-body">
								 <h5 id="clientesativos" class="card-title">?</h5>
							</div>
						</div>
					</div>

					<div class="col-md-6">
		    			<div class="card">
							<div class="card-header">
								Total de Produtos
							</div>
							<div class="card-body">
								 <h5 id="totaldeprodutos" class="card-title">?</h5>
							</div>
						</div>
		    		</div>
		    	</div>

          <div class="col-md-12">
		    			<div class="card">
							<div class="card-header text-success">
								Fechamentos
							</div>
							<div class="card-body">
								 <h5 id="" class="card-title " style="text-align:center;"><a href="../Views/fechamentos.php" id="fechamento"><i class="fas fa-file-invoice fa-5x text-dark"></i></a></h5>
							</div>
						</div>
		    		</div>
		    	</div>
    </div>

      <div class="row">



        <div class="card-home">

          <div class="card">

            <div class="card-header">

              Menu

            </div>

            <div class="card-body">

              <div class="row">


                <div class="col-lg-2 col-6 d-flex justify-content-center">

                  <a href="inserirProduto.php">

                  <i id="adicionar" class="far fa-plus-square text-success fa-5x"></i><p> Novo Produto</p>

                  </a>

                </div>

                <div class="col-lg-2 col-6 d-flex justify-content-center">

                <a href="./verprodutos.php">

                <i id="ver" class="text-success fas fa-search fa-5x"></i><p>Ver Produtos</p>

                </a>

                </div>

                <div class="col-lg-2 col-6 d-flex justify-content-center">

                <a href="./inserirCliente.php">

                <i id="ver" class="text-dark fas fa-user-plus text-info fa-5x"></i><p>Adicionar Cliente</p>
                  </a>

                  </div>

                  <div class="col-lg-2 col-6 d-flex justify-content-center">

                    <a href="./verClientes.php">

                  <i id="ver" class="text-dark fas fa-list-ul fa-5x"></i><p>Visualizar Clientes</p>
                 </a>

               </div>

               <div class="col-lg-2 col-6 d-flex justify-content-center">

                <a href="./adcionarVenda.php">

                <i id="ver" class="text-primary fas fa-plus-circle fa-5x"></i><p>Adicionar Venda</p>
                  </a>

                  </div>

                  <div class="col-lg-2 col-6 d-flex justify-content-center">

                    <a href="./verVendas.php">

                  <i id="ver" class="text-primary fas fa-money-bill-wave fa-5x"></i> <p>Visualizar Vendas</p>
                 </a>

               </div>
              
              

              </div>

            </div>

          </div>

        </div>

    </div>

  </body>

</html>