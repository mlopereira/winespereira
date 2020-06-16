<?php ob_start();?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

     <title>Wine´s Pereira - Login</title>

    <!-- Bootstrap  CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS -->
    <link href="css/estilos.css" rel="stylesheet">


</head>

<body>
	<?php session_start(); 
	include 'nav.php';
	?>
    

    <!-- Page Content -->
    <div class="container">

        <!-- Page Header -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Fazer login /
                    <small>Wine´s Pereira</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            <div class="col-lg-12">
          <form method="post" action="valida.php">

          <label>Email:</label>
          <input type="email" id="email" name="email" required>

          <label> Senha:</label>
          <input type="password" id="senha" name="senha" required>
          <input type="submit" value=" Entrar " />

          </form>
				
		<a href="cadastrarCliente.php">
				<button type="submit" class="btn btn-lg btn-link">
					
					Ainda não sou cadastrado
					
				</button>
				</a>	
				
				<a href="esqueciSenha.php">
				<button type="submit" class="btn btn-lg btn-link">
					
					Esqueci minha senha
					
				</button>	
				
				</a>	

          </div>


                    </div>


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