<?php 

include 'conexao.php';
	session_start();

	if (!isset($_SESSION['carrinho'])) {
	
	$_SESSION['carrinho'] = array();
		
	}

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
        <div class="col-lg-12">
            <h1 class="page-header">
                <span class="glyphicon glyphicon-shopping-cart"></span>
                Carrinho
                <small></small>
            </h1>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="panel-title">
                        <div class="row">
                            <div class="col-xs-6">
                                <p>Produtos: <?php echo $exibe['produto'] ?></p>
                                <a href="img/<?php echo $exibe['foto_principal']?>" data-lightbox="principal" data-title="Teste">
								<img src="img/<?php echo $exibe['foto_principal'];?>" width=200 height=100></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                    <div class="row">
                        <div class="col-xs-6 col-xs-offset-6 text-right">
                            <div class="col-xs-3">
                                <h5><strong>Quantidade: <?php echo $qnt ?></strong></h5>
                            </div>
                            <div class="col-xs-3">
                                <h5><strong>Preço: <?php echo "R$".$exibe['preco'] ?></strong></h5>
                            </div>
                            <div class="col-xs-3">
                                <h5><strong>Total: <?php echo "R$".number_format($total,2,',','.');  ?></strong></h5>
                            </div>
                        </div>
                    </div>
                    
                        
                    </div>
                </div>                
                
            </div>
      
<?php } ?>