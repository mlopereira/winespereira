<?php ob_start();?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

     <title>Wine´s Pereira - Meus Pedidos</title>

    <!-- Bootstrap  CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS -->
    <link href="css/estilos.css" rel="stylesheet">
	<link href="css/lightbox.css" rel="stylesheet">


</head>

<body>
<?php session_start(); 

if (empty($_SESSION['email'])) {
	
	header("location:login.php");
}


?>
    <!-- Navigation -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            
		<div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Wine´s Pereira</a>
            </div>
            
            <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Vinhos <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="busca.php?busca=Branco">Branco</a>
                        </li>
                        <li><a href="busca.php?busca=Espumante">Espumante</a>
                        </li>
                        <li><a href="busca.php?busca=Frisante">Frisante</a>
                        </li>
                        <li><a href="busca.php?busca=Licoroso">Licoroso</a>
                        </li>
                        <li><a href="busca.php?busca=Rosé">Rosé</a>
                        </li>
                        <li><a href="busca.php?busca=Tinto">Tinto</a>
                        </li>
                        <li class="divider"></li>
                    </ul>
                </li>
				
				
				<li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Países <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="busca.php?busca=África do Sul">África do Sul</a>
                        </li>
                        <li><a href="busca.php?busca=Alemanha">Alemanha</a>
                        </li>
                        <li><a href="busca.php?busca=Argentina">Argentina</a>
                        </li>
                        <li><a href="busca.php?busca=Austrália">Austrália</a>
                        </li>
                        <li><a href="busca.php?busca=Brasil">Brasil</a>
                        </li>
                        <li><a href="busca.php?busca=Chile">Chile</a>
                        </li>
                        <li><a href="busca.php?busca=Espanha">Espanha</a>
                        </li>
                        <li><a href="busca.php?busca=Estados Unidos">Estados Unidos</a>
                        </li>
                        <li><a href="busca.php?busca=França">França</a>
                        </li>
                        <li><a href="busca.php?busca=Itália">Itália</a>
                        </li>
                        <li><a href="busca.php?busca=Nova Zelândia">Nova Zelândia</a>
                        </li>
                        <li><a href="busca.php?busca=Portugal">Portugal</a>
                        </li>
                        <li><a href="busca.php?busca=Uruguai">Uruguai</a>
                        </li>
                        <li><a href="busca.php?busca=Grécia">Grécia</a>
                        </li>
                        <li><a href="busca.php?busca=Hungria">Hungria</a>
                        </li>
                        <li><a href="busca.php?busca=Líbano">Líbano</a>
                        </li>
                        <li><a href="busca.php?busca=Marrocos">Marrocos</a>
                        </li>
                        <li class="divider"></li>
                    </ul>
                </li>
            
            
				
                    <form class="navbar-form navbar-left" method="post" action="resultado.php">
					<div class="form-group">
					<input type="text" class="form-control" placeholder="Busca" name="busca">
					</div>
					<button type="submit" class="btn btn-default btn-primary">Buscar</button>
					</form>
					<li>
					<?php
		
					include 'conexao.php';
					

					$consulta = $pdo->query('SELECT * FROM produtos');
					$banner = $pdo->query('SELECT * FROM promocao ORDER BY id DESC');
					$exibe = $banner->fetch(PDO::FETCH_ASSOC);
				
					?>
		
					<?php if (empty($_SESSION['email'])){ 
	
					echo "<h4 style='color:#FFFFFF;margin-top:15px'>".'Sr(a) Convidado'.'</h4>';?>

	
					<?php }else{ ?>
	
					<?php
		
	
					$email_conectado = $_SESSION['email'];	
					$login = $pdo->query("SELECT nome FROM clientes WHERE email='$email_conectado'");
					$linha2 = $login->fetch(PDO::FETCH_ASSOC);

					?>							
					<?php
					if ($_SESSION['admin']==0) {
						
					
					
					echo "<h4 style='color:#FFFFFF;margin-top:15px'>".$linha2['nome'].'</h4>';
					?>
					
					<?php } else { ?>
							
							<li><a href="admin.php"><button class="btn btn-sm btn-danger">Adm</button></a></li>
					
                    <?php }
					}?>
					
					
			        
			          
                    
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><li><span class="glyphicon glyphicon-user"></span> Minha Conta <span class="caret"></span></a>
        <ul class="dropdown-menu">
		            <li><a href="login.php">Login</a></li>
          			<li><a href="cadastrarCliente.php">Cliente novo? Cadastrar</a></li>
			        <li><a href="#">Minha Conta</a></li>
          			<li><a href="meusPedidos.php">Meus Pedidos</a></li>
          			<li><a href="logoff.php">Sair</a></li>
        			</ul>
      				</li>
           			<li><a href="carrinho.php"><span class="glyphicon glyphicon-shopping-cart"></span> Carrinho</a></li>          
                                           
			      	</ul>
    
              <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
		</div>
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Header -->
        <div class="row">
        	<div class="col-lg-12">
            	<h1 class="page-header">
                	<span class="glyphicon glyphicon-shopping-cart"></span> Meus Pedidos <small></small>
            	</h1>
			</div>
    	</div>

<?php
		
		$id_user = $_SESSION['id'];
	
	$consultaVenda = $pdo->query("SELECT * FROM vendas WHERE id_cliente='$id_user' GROUP BY ticket");
		
		?>





<div class="row">
        <div class="col-xs-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="panel-title">
                        <div class="row">
                            <div class="col-sm-12">
								
	<div class="row" style="margin-top: 15px;">
		
		<div class="col-sm-1 col-sm-offset-1"><h4> Data: </h4> </div>
		<div class="col-sm-2"><h4> Ticket: </h4></div>
		
				
	</div>
								
								
    <?php
			
	while ($exibeVenda=$consultaVenda->fetch(PDO::FETCH_ASSOC)) {
	
	?>
	
	<div class="row" style="margin-top: 15px;">
		
		<div class="col-sm-1 col-sm-offset-1"><?php echo @date('d/m/Y',strtotime($exibeVenda['data'])); ?> </div>
		<div class="col-sm-2"><a href="ticket.php?ticket=<?php echo $exibeVenda['ticket']; ?>"><?php echo $exibeVenda['ticket']; ?></a> </div>
		
		
				
	</div>
		
	<?php } ?>
                        
							</div>
        				</div>
					</div>
				</div>
			</div>
		</div>			
</div>	
    						




<?php
include 'rodape.php';
?>
</body>
</html>
	<?php ob_end_flush();?>