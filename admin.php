<?php ob_start();?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

     <title>Wine´s Pereira - Administrador</title>

	 <!-- CSS -->
    <link href="css/estilos.css" rel="stylesheet">
	
    <!-- Bootstrap  CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

   


</head>

<body>
	<?php session_start(); 
	
	     include 'nav.php';
	?>
    

    <!-- Page Content -->
    <div class="container">

        <!-- Page Header -->
       
       <div class="container-fluid">
	
		<div class="row">
		
			<div class="col-sm-4 col-sm-offset-4 text-center">
                <h1 class="page-header">Área Administrativa
                    
                </h1>
            </div>
        </div>
        <!-- /.row -->
		<div id="minhaDiv">
		
        <div class="row">
		
			<div class="col-sm-12 text-center">
        
        
		<a href="cadastrarProduto.php">
		<button class="btn btn-lg btn-primary MinhaClasse">Cadastrar Produto </button>
		</a> <br>
		
		<a href="Lista.php">		
		<button class="btn btn-lg btn-primary MinhaClasse">Alterar / Excluir Produto </button>
		</a><br>
		<a href="index.php">
		<button class="btn btn-lg btn-primary MinhaClasse">Ir para Home </button>
		</a> <br>
		
		<a href="cadastrarPromocao.php">
		<button class="btn btn-lg btn-primary MinhaClasse">Gerar Promoção </button>
		</a> <br>
		
		<a href="logoff.php">
		<button class="btn btn-lg btn-danger btn-primary MinhaClasse">Logoff </button>
		</a> <br>
		
		</div>
		</div>
        </div>
		
        <!-- Projects Row -->
        
		
        

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2018</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
<?php ob_end_flush();?>