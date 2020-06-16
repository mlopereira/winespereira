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

if (empty($_SESSION['email'])) {
	
	header("location:login.php");
}
include 'nav.php';

?>
    

    <!-- Page Content -->
    <div class="container">

        <!-- Page Header -->
        <div class="row">
        	<div class="col-lg-12">
            	<h1 class="page-header">
                	<span class="glyphicon glyphicon-shopping-cart"></span> Carrinho <small></small>
            	</h1>
			</div>
    	</div>

		

<?php 

include 'conexao.php';
include 'nav.php';


	if (!isset($_SESSION['carrinho'])) {
	
	$_SESSION['carrinho'] = array();
		
	}
	
	
	if (!empty($_GET['id'])) {

// adicionar o produto

	$id_prod = $_GET['id'];

	if (!isset($_SESSION['carrinho'][$id_prod])) {

	$_SESSION['carrinho'][$id_prod]=1;
	
	}else{
	
	$_SESSION['carrinho'][$id_prod]+=1;
		
	}
	
	
	
	
	$total=0;
	
	
	foreach ($_SESSION['carrinho'] as $id => $qnt){
		$con = $pdo->query("SELECT * FROM produtos WHERE id='$id'");
		$exibe = $con->fetch(PDO::FETCH_ASSOC);	
		
		
		$total += $exibe['preco'] * $qnt;

?>
	
 
      <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="panel-title">
                        <div class="row">
                            <div class="col-sm-3">
                                <p> Produtos: <?php echo $exibe['produto'] ?></p>
                                <a href="img/<?php echo $exibe['foto_principal']?>" data-lightbox="principal" data-title="Teste">
								<img src="img/<?php echo $exibe['foto_principal'];?>" width=200 height=100></a>
                            </div>
                
                
                
                    
                        
                            <div class="col-sm-3">
                                <h5><strong> Quantidade: <?php echo $qnt ?></strong></h5>
                            </div>
                            <div class="col-sm-3">
                                <h5><strong> Preço: <?php echo "R$".$exibe['preco'] ?></strong></h5>
                            </div>
                                                   
                   
      				
            
     			    
    
<?php } ?>

		<div class="row" style="margin-top:150px;">
        	<div class="col-sm-12">
		 		<div class="col-sm-3">
                    <h5><strong>Total: <?php echo "R$".number_format($total,2,',','.');  ?></strong></h5>
    	    	</div>
        	</div>
		</div>
        <br>
        
        <?php }
		
		
		else {
			
			// Se o carrinho estiver vazio
			$total=0;
			
			foreach ($_SESSION['carrinho'] as $id => $qnt){
			$con = $pdo->query("SELECT * FROM produtos WHERE id='$id'");
			$exibe = $con->fetch(PDO::FETCH_ASSOC);	
		
		
			$total += $exibe['preco'] * $qnt;
			
		?>
		<div class="row">
        <div class="col-xs-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="panel-title">
                        <div class="row">
                            <div class="col-sm-3">
                                <p> Produtos: <?php echo $exibe['produto'] ?></p>
                                <a href="img/<?php echo $exibe['foto_principal']?>" data-lightbox="principal" data-title="Teste">
								<img src="img/<?php echo $exibe['foto_principal'];?>" width=200 height=100></a>
                            </div>
                
                
                
                    
                        
                            <div class="col-sm-3">
                                <h5><strong> Quantidade: <?php echo $qnt ?></strong></h5>
                            </div>
                            <div class="col-sm-3">
                                <h5><strong> Preço: <?php echo "R$".$exibe['preco'] ?></strong></h5>
                            </div>
                                                   
                   
      				
            
     			    
    
<?php } ?>

		<div class="row" style="margin-top:150px;">
        	<div class="col-sm-12">
		 		<div class="col-sm-3">
                    <h5><strong>Total: <?php echo "R$".number_format($total,2,',','.');  ?></strong></h5>
    	    	</div>
        	</div>
		</div>
        <br>
        
        <?php
			
		
		
			
			}
			
		
		
		?>
		
	
        
		<div class="row">
	        <div class="col-sm-12 text-center">
				 <div class="col-sm-4 text-center">
                    	
                        <a href="index.php">
                        <button type="button" name="button" class="btn btn-block btn-primary btn-lg btn-default">
	                        <span class="glyphicon glyphicon-shopping"></span> Continuar comprando</button></a>
				</div>             
				
				
                <div class="col-sm-4 text-center">
						<a href="limparCarrinho.php">
                        <button type="button" name="button" class="btn btn-block btn-lg btn-success">
                            <span class="glyphicon glyphicon-shopping"></span> Limpar Carrinho</button></a>
   				</div>
                
                <div class="col-sm-4 text-center">
						<a href="finalizarCompra.php">
                        <button type="button" name="button" class="btn btn-block btn-lg btn-danger btn-success">
                            <span class="glyphicon glyphicon-shopping"></span> Finalizar Compra</button></a>
				</div>

                         
                    
				</div>
        	</div>
		</div>						    		
		    					
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