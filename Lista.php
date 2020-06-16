<?php ob_start();?>
<!doctype html>

<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Wine´s Pereira</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<style>
	
	.navbar{
		margin-bottom: 0;
	}
	
	
	</style>
	
	
	
</head>

<body>	
	
	<?php
	
	session_start();
	
	
	if (empty($_SESSION['admin']) || $_SESSION['admin']!=1) {
		
		header('location:index.php');
		
	}
	
	include 'conexao.php';	
	include 'nav.php';
	
	
	
	$consulta = $pdo->query("SELECT * FROM produtos");
	
	
	?>
	
<div class="container-fluid">
	
	
	<?php while ($exibe = $consulta->fetch(PDO::FETCH_ASSOC)) {
	
	?>
	
	
	<div class="row" style="margin-top: 15px;">
		
		<div class="col-sm-1 col-sm-offset-1"><img src="img/<?php echo $exibe['foto_principal']; ?>" class="img-responsive"></div>
		<div class="col-sm-5"><h4 style="padding-top:20px"><?php echo $exibe['produto']; ?></h4></div>
		<div class="col-sm-2" style="padding-top:20px">
		
			
		<a href="formAlterar.php?id=<?php echo $exibe['id']; ?>">	
		<button class="btn btn-lg btn-block btn-default">
		<span class="glyphicon glyphicon-pencil"> Alterar</span>
		</button>
		</a>
		</div>
		
		<div class="col-sm-2 col-xs-offset-right-1" style="padding-top:20px">
		<a href="excluir.php?id=<?php echo $exibe['id']; ?>">	
		<button class="btn btn-lg btn-block btn-danger">
		<span class="glyphicon glyphicon-remove"> Excluir</span>		
		</button>
		</a>
		
		
		</div> 
				
	</div>		
	
	
	<?php } ?>
	

	
</div>
	
	
	
</body>
</html>
<?php ob_end_flush();?>