<?php ob_start();?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

     <title>Wine´s Pereira - Detalhes</title>

    <!-- Bootstrap  CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS -->
    <link href="css/estilos.css" rel="stylesheet">
	<link href="css/lightbox.css" rel="stylesheet">


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
                <h1 class="page-header">Detalhes do Produto
                    <small>Produto em estoque !!!</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

		<?php
		
		include 'conexao.php';
		try {
		$pegaid = $_GET['id'];
		$consulta = $pdo->prepare('SELECT * FROM produtos WHERE id=:sid');
		$consulta->bindValue(':sid', $pegaid);
		$consulta->execute();
		$linha = $consulta->fetch(PDO::FETCH_ASSOC);		
		
   
     
    
    if ($consulta->rowCount() === 1 ) {
        $resultado = $consulta->fetchObject();        
        
    }else{
        echo "Não encontrado";
    }
        
	} catch (PDOException $e) {
    echo $e->getMessage();
}
?>
		
		
		
		
		
        <!-- Projects Row -->
        <div class="row">
		
		<div class="col-sm-6">
                    <p>Produto: <?php echo $linha['produto'] ?></p>
					<p>Descrição: <?php echo $linha['descricao'] ?></p>
					<p>Especificação: <?php echo $linha['especificacao'] ?></p>
					
					<a href="img/<?php echo $linha['foto_principal']?>" data-lightbox="principal" data-title="Teste">
					<img src="img/<?php echo $linha['foto_principal'];?>" width=200 height=100></a>
					<a href="img/<?php echo $linha['foto2']?>" data-lightbox="principal" data-title="Teste">
					<img src="img/<?php echo $linha['foto2'];?>" width=200 height=100></a>
					<a href="img/<?php echo $linha['foto3']?>" data-lightbox="principal" data-title="Teste">
					<img src="img/<?php echo $linha['foto3'];?>" width=200 height=100></a>
                    
                    </div>
				
      
					     
		
		<!-- Projects Row -->
    
            
        <div class="col-sm-6">
            <h2><?php echo $linha['produto'] ?></h2> 


			<?php
			
			if ($linha['ranking']==5) {
            
            echo    "<span class='glyphicon glyphicon-star' style='color:orange;'> </span>";
			echo    "<span class='glyphicon glyphicon-star' style='color:orange'> </span>";
			echo    "<span class='glyphicon glyphicon-star' style='color:orange'> </span>";
			echo    "<span class='glyphicon glyphicon-star' style='color:orange'> </span>";
			echo    "<span class='glyphicon glyphicon-star' style='color:orange'> </span>";
				
			}
			
			if ($linha['ranking']==4) {
            
            echo    "<span class='glyphicon glyphicon-star' style='color:orange'> </span>";
			echo    "<span class='glyphicon glyphicon-star' style='color:orange'> </span>";
			echo    "<span class='glyphicon glyphicon-star' style='color:orange'> </span>";
			echo    "<span class='glyphicon glyphicon-star' style='color:orange'> </span>";
			echo    "<span class='glyphicon glyphicon-star'> </span>";
							
			}
			
			if ($linha['ranking']==3) {
            
            echo    "<span class='glyphicon glyphicon-star' style='color:orange'> </span>";
			echo    "<span class='glyphicon glyphicon-star' style='color:orange'> </span>";
			echo    "<span class='glyphicon glyphicon-star' style='color:orange'> </span>";
			echo    "<span class='glyphicon glyphicon-star'> </span>";
			echo    "<span class='glyphicon glyphicon-star'> </span>";
							
			}
			
			if ($linha['ranking']==2) {
            
            echo    "<span class='glyphicon glyphicon-star' style='color:orange'> </span>";
			echo    "<span class='glyphicon glyphicon-star' style='color:orange'> </span>";
			echo    "<span class='glyphicon glyphicon-star'> </span>";
			echo    "<span class='glyphicon glyphicon-star'> </span>";
			echo    "<span class='glyphicon glyphicon-star'> </span>";
										
			}
			
			if ($linha['ranking']==1) {
            
            echo    "<span class='glyphicon glyphicon-star' style='color:orange'> </span>";
			echo    "<span class='glyphicon glyphicon-star'> </span>";
			echo    "<span class='glyphicon glyphicon-star'> </span>";
			echo    "<span class='glyphicon glyphicon-star'> </span>";
			echo    "<span class='glyphicon glyphicon-star'> </span>";
													
			}
            
			?>
            <h4>R$ <?php echo number_format($linha['preco'],2,',','.') ?> <small>à vista</small></h4>
            
            </div>
                    
                <div class="col-sm-4">
                    <?php if($linha['estoque'] > 0){ ?>
					<a href="carrinho.php?id=<?php echo $linha['id']?>">
                        <button type="button" name="button" class="btn btn-block btn-lg btn-success">
                            <span class="glyphicon glyphicon-shopping-cart"></span>
                            Comprar
                        </button></a>
						<p></p>
                    <?php }else{ ?>
                        <button type="button" name="button" class="btn btn-block btn-lg btn-success disabled">
                            <span class="glyphicon glyphicon-shopping-cart"></span>
                            Indisponível
                        </button>
                    <?php } ?>
					
					 <table class="table table-striped" "width=100%">
                        <?php 
                        $nParcelas = 8;
                        if ($linha['preco'] > "2500.00") {
                            $nParcelas = 12;
                        }
                        for ($i=1; $i <= $nParcelas ; $i++) { 
                            $precoParcela = number_format(($linha['preco'] / $i),2,',','.');                            
                            echo "    <tr>";
                            echo "        <td>".$i."</td>";
                            echo "        <td>de R$ ".$precoParcela." </td>";
                            echo "        <td>sem juros</td>";
                            echo "        <td>total R$ ".number_format($linha['preco'],2,',','.')."</td>";
                            echo "    </tr>";
                        }
                        ?>
                        
                    </table>
					
                
            </div>
			
            
      
                        
 
    
	
		  
        </div>
        <!-- /.row -->
    <div class="row">
        <h2>Comentários</h2>
        <?php for ($i=0; $i < rand(1,10) ; $i++) { ?>        
            <div class="media">
                <div class="media-left">
                    <img src="http://loremflickr.com/200/200?random=<?php echo $i ?>" class="media-object" style="width:60px">
                </div>
                <div class="media-body">
                    <h4 class="media-heading">John Doe <small><?php echo date('d/m/Y H:m') ?></small></h4>
                    <p>
                        <?php 
                            $texto = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
                            echo substr($texto,0,rand(100,400));                    
                         ?>
                    </p>
                </div>
            </div>
        <?php } ?>
        
        
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
	<script src="js/lightbox.js"></script>

</body>

</html>
<?php ob_end_flush();?>



<!--</div>
            
            <div class="col-lg-4">
                <h3 class="page-header">Teclados<br>
                  <small>Classifique o produto selecionado<br></small>
                        <span class="glyphicon glyphicon-star-empty"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
	           </h3>
           </div>

            <div class="col-lg-2">
                <h2 class="page-header">Á vista R$ 0,00</h2>
            <button class="btn btn-lg btn-block btn-primary">Comprar</button>
            </div>                         
             
        </div>-->
		
		
		