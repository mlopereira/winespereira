<?php 
include 'cabecalho.php';
include 'conexao.php';

if(!isset($_SESSION['carrinho'])){
    header('location:carrinho.php');
}
if(!isset($_SESSION['usuario'])){    
    $_SESSION['logar'] = true;   
    header('location:login.php');
}

?>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            <span class="glyphicon glyphicon-asterisk"></span>
            Resumo Pedido
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
                            <h3>Produtos</h3>
                        </div>
                        <div class="col-xs-6 text-right">
                            <button data-toggle="collapse" data-target="#demo" class="btn btn-primary  ">
                            <span class="glyphicon glyphicon-plus"></span>
                            </button>
                        </div>
                        <?php /*
                        <div class="col-xs-6">
                            <button type="button" class="btn btn-primary btn-sm btn-block">
                                <span class="glyphicon glyphicon-share-alt"></span> Continue shopping
                            </button>
                        </div>
                        */ ?>
                    </div>
                </div>
            </div>
            
            <div class="panel-body collapse" id="demo" style="padding:15px">
                <div class="row">
                    <div class="col-xs-6 col-xs-offset-6 text-right">
                        <div class="col-xs-4">
                            <h3><strong>Quantidade</strong></h3>
                        </div>
                        <div class="col-xs-4">
                            <h3><strong>Preço</strong></h3>
                        </div>
                        <div class="col-xs-4">
                            <h3><strong>Total</strong></h3>
                        </div>
                    </div>
                </div>
                <?php 
                $subTotal = 0;
                $total = 0;
                foreach ($_SESSION['carrinho'] as $id_produto => $item) {
                    $query = "SELECT id,produto,foto_principal FROM produtos WHERE id = :id_produto";
                    $sql = $conn->prepare($query);
                    $sql->bindValue(':id_produto', $id_produto);
                    $sql->execute();
                    $produto = $sql->fetchObject();
                    
                    $precoProd = number_format($item['preco'],2,',','.');
                    $precoProdQtd = number_format($item['preco']*$item['qtd'],2,',','.');
                    
                    $subTotal += $item['preco']*$item['qtd'];
                    $total += $item['preco']*$item['qtd'];
                    $envio = '19.90';
                ?>
                    <div class="row">
                        <div class="col-xs-2">
                            <img class="img-responsive" src="uploads/<?php echo $produto->foto_principal ?>">
                        </div>
                        <div class="col-xs-4">
                            <h4 class="product-name"><strong><?php echo $produto->produto ?></strong></h4>
                            <!-- <h4><small>Product description</small></h4> -->
                        </div>
                        <div class="col-xs-6 text-right">
                            <div class="col-xs-4 ">
                                <h4><span class="label label-default"><?php echo $item['qtd'] ?></span></h4>
                            </div>
                            <div class="col-xs-4 ">
                                <h4><?php echo $precoProd ?></h4>
                            </div>                        
                            <div class="col-xs-4 ">
                                <h4><strong><?php echo $precoProdQtd ?></strong></h4>
                            </div>                            
                        </div>
                    </div>
                    <hr>
                <?php } ?>
            </div>
            
            <div class="panel-footer">
                <div class="row text-right">
                    <div class="col-xs-6 col-xs-offset-6">
                        <div class="col-xs-9">                            
                            <h4>Sub-Total</h4>
                        </div>
                        <div class="col-xs-3">
                            <h4><strong><?php echo number_format($subTotal,2,',','.') ?></strong></h4>
                        </div>
                    </div>
                </div>
                <div class="row text-right">
                    <div class="col-xs-6 col-xs-offset-6">
                        <div class="col-xs-9">                            
                            <h4>Envio</h4>
                        </div>
                        <div class="col-xs-3">
                            <h4><strong><?php echo number_format($envio,2,',','.') ?></strong></h4>
                        </div>
                    </div>
                </div>
                <div class="row text-right">
                    <div class="col-xs-6 col-xs-offset-6">                        
                        <div class="col-xs-9">                            
                            <h3>Total</h3>
                        </div>
                        <div class="col-xs-3">
                            <h3><strong><?php echo number_format($total+$envio,2,',','.') ?></strong></h3>
                        </div>
                    </div>
                </div>
                
            </div>                
            
        </div>
    </div>
    
    <div class="col-xs-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">
                    <div class="row">
                        <div class="col-xs-6">
                            <h3>Forma de pagamento</h3>
                        </div>                        
                    </div>
                </div>
            </div>
            
            <div class="panel-body" style="padding:15px">
                <div class="row">
                    <ul>
                        <li>cartao</li>
                        <li>boleto</li>
                        <li>cheque</li>
                    </ul>
                </div>            
            </div>            
        </div>
    </div>
    
    <div class="col-xs-12">
        <a href="finalizarPagamento.php" class="btn btn-success btn-block btn-lg">
            <span class="glyphicon glyphicon-ok"></span>
            Concluir Pagamento            
        </a>
    </div>    
    
</div>


 
<?php include 'rodape.php' ?>
 