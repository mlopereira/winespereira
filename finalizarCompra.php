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


?>
    <!-- Navigation -->
    

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

$ticket = uniqid();
$id_cliente = $_SESSION['id'];
@$hoje = date ("Y-m-d");

foreach ($_SESSION['carrinho'] as $id => $qnt){

		$consulta = $pdo->query("SELECT * FROM produtos WHERE id='$id'");
		$exibe = $consulta->fetch(PDO::FETCH_ASSOC);

		$total = $exibe['preco'] * $qnt;
		
		
		//echo $ticket."<br>";
		//echo 'id:'.$id_cliente."<br>";
		//echo $hoje."<br>";
		//echo $total."<br>";
		//echo $id."<br>";
		//echo $qnt."<br>";
		
		
		
		$inserir = $pdo->query("INSERT INTO vendas (ticket,id_cliente,data,id_prod,quantidade,valor) VALUES ('$ticket','$id_cliente','$hoje','$id','$qnt','$total')");
		
}

?>



<div class="row">
        <div class="col-xs-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="panel-title">
                        <div class="row">
                            <div class="col-sm-12">
                                <p> Parabéns sua compra foi realizada com sucesso e o Nº do seu Ticket é: <?php echo $ticket ?></p>
                                
                            </div>
                
                      
                    
        <br>
							
<?php
	
	unset($_SESSION['carrinho']);
									
?>
        




<?php
include 'rodape.php';
?>
</body>
</html>
<?php ob_end_flush();?>