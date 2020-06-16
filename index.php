<?php ob_start();?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Wine´s Pereira</title>

    <!-- Bootstrap  CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS -->
    <link href="css/estilos.css" rel="stylesheet">

	<link href="css/lightbox.css" rel="stylesheet">
	 		

</head>

<body>
	<?php session_start(); 
    
     include 'nav.php';
	 
	 $consulta = $pdo->query('SELECT * FROM produtos ORDER BY id desc');

?>
    <!-- Page Content -->
<!--<div id="banner"><a href="<?php echo $exibe['link'] ?>"><img class="img-responsive" src="img/<?php echo $exibe['banner']; ?>" width="100%"  alt=""/></a>  </div>-->


<?php
include 'cabecalho.php';
?>
    <div class="container">
		
		

        <!-- Page Header -->
        
		<div class="row">
		 
            <div class="col-lg-12">
                <h1 class="page-header"> PRODUTOS
                    <small>Escolha o seu:</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

		
		
		
        <!-- Projects Row -->
        <div class="row">
        
		<?php
		
		
		while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
			
		?>	
		
		<div class="col-lg-4 portfolio-item">
                <a href="img/<?php echo $linha['foto_principal']?>" data-lightbox="principal" data-title="Foto">
                    <img class="img-responsive" src=img/<?php echo $linha['foto_principal']?> width=700 height=400 alt="">
                </a>
                <h3>
				<a href="detalhes.php?id=<?php echo $linha['id']?>"><?php echo $linha['produto'] ?></a>
                </h3>
                <p><?php echo $linha['descricao'] ?></p>
				<p>R$ <?php echo $linha['preco'] ?></p>
				
									
				<div class="row">
					<div class="col-lg-12">
						<div class="col-sx-6">
                            <a href="detalhes.php?id=<?php echo $linha['id'] ?>">
                              <button type="button" class="btn btn-block btn-success btn-primary" name="details">
                                 </b><span class="glyphicon glyphicon"> <b class="disp"> Detalhes</span></button>
                            </a>
                          </div><p>

                          <?php
                          if ($linha['estoque'] > 0) { ?>
                            <div class="col-sx-6">
							
							<a href="carrinho.php?id=<?php echo $linha['id']?>">
                              <button type="button" class="btn btn-block btn-primary" name="comprar">
                              <span class="glyphicon glyphicon-shopping"> <b class="disp"> Comprar </span></b></button></a>
                            </div><p>
							
							
                          <?php
                          }

                          else { ?>
                            <div class="col-sx-6">
                              <button type="button" class="btn btn-block btn-danger btn-primary" name="disabled">
                              </b><span class="glyphicon glyphicon"> <b class="disp">Indisponível</span></button>
                           </div><p>
                          <?php
                          }
                           ?>

                    </div>  
                </div>
				
				
						
            </div>
        <?php }; ?>  
		

		  
        </div>
		
		
        <!-- Footer -->
		<footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-sm-6 col-md-3">
                        <h3>Localização</h3>
                        <p>Av. Rui Barbosa, 55
                            <br>Jaboticabal, SP 14887-000</p>
                    </div>
                    <div class="footer-col col-sm-6 col-md-3">
                        <h3>Nos encontre na internet</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Facebook</span><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Twitter</span><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Linked In</span><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                            
                        </ul>
                    </div>
                    <div class="footer-col-sm-6 col-md-3">
                        <h3>Conteúdo educacional</h3>
                        <p>Este web app foi desenvolvido por Marcelo N. C. Pereira </p>
                    </div>
					<div class="footer-col col-sm-6 col-md-3">
                        <h3>Formas de Pagamentos</h3>
                        <div class="row">                    
                    <div class="col-xs-6 col-sm-12">                
                        <img src="images/gateway2.png" class="btn-block img-responsive"  alt="">
                    </div>
                </div>
            </div>
                    </div>
                </div>
            </div>
        </div>
		<div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Senac 2018
                    </div>
                </div>
            </div>
        </div>
    </footer>

   
	<div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>


<!-- Custom Fonts -->
    <link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

	
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/lightbox.js"></script>
	<script src="js/freelancer.min.js"></script>
	<script src="js/jquery.min.js"></script>
	
	<!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
	
	

</body>

</html>
<?php ob_end_flush();?>