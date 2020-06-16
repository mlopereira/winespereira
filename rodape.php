<hr>
<!-- Footer -->

</div>
<footer>
    <div class="container">        
        <div class="row">
            <!-- <div class="col-lg-12">
            <p>Copyright &copy; Your Website 2018</p>
        </div> -->
            <div class="duas-colunas col-sm-6 col-md-3">
                <h4>Páginas</h4>
                <ul>
                    <li>Home</li>
                    <li>Institucional</li>
                    <li>Contato</li>
                </ul>
            </div>
            <div class="duas-colunas col-sm-6 col-md-3">
                <h4>Produtos</h4>
                <ul>
                    <li>Diversos</li>
                    <li>HD</li>
                    <li>Placa-mãe</li>
                    <li>Processador</li>
                </ul>
            </div>
            <div class="duas-colunas col-sm-6 col-md-3">
                <h4>Opções de pagamento</h4>
                <div class="row">                    
                    <div class="col-xs-6 col-sm-8">                
                        <img src="images/gateway2.png" class="btn-block img-responsive"  alt="">
                    </div>
                </div>
            </div>
            <div class="duas-colunas col-sm-6 col-md-3">
                <h4>Newsletter</h4>
                <form class="">
                    <div class="form-group form-group-sm">                        
                        <input type="text" class="form-control" id="newsnome" placeholder="Nome">
                    </div>                
                    <div class="form-group form-group-sm">                        
                        <input type="email" class="form-control" id="newsemail" placeholder="Email">
                    </div>
                    <button type="submit" class="btn btn-default btn-sm">Enviar</button>
                </form>
            </div>
        </div>        
    </div>
    <div class="footer2">
        <div class="container">
            <div class="row">
                <div class="duas-colunas col-sm-6 ">
                    <p class="copyright text-left">
                        Todos os direitos reservados  <?php echo @date("Y") ?>
                    </p>
                </div>
                <div class="duas-colunas col-sm-6 ">
                    <p class="copyright text-right">
                        desenvolvido por <span></span>
                    </p>
                </div>
            </div>            
        </div>
    </div>
<!-- /.row -->
</footer>
<!-- /.container -->

<!-- jQuery -->
<script src="js/jquery.js"></script>
<script src="js/jquery.maskMoney.js"></script>

<script src="js/js.js"></script>
<script src="js/lightbox.js"></script>
<script>
    lightbox.option({
        'resizeDuration': 100,
        'fadeDuration': 300,
        // 'maxWidth': 350
    })
</script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>
<?php ob_end_flush(); ?>