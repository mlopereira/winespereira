<?php ob_start();?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Wine´s Pereira - Cadastrar Produto</title>

    <!-- Bootstrap  CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS -->
    <link href="css/estilos.css" rel="stylesheet">
    <link rel="stylesheet" href="/css.css">


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
                <h1 class="page-header">Cadastrar Produto /
                    <small>Insira as informações do produto.</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->
        <form action="inserirProduto.php" method="post" id="inclusao" enctype="multipart/form-data">

        <label for="produto">Produto:</label><br>
        <input type="text" id="produto" name="produto" required width="40" maxlength="50">
        <br><br>

               
        <label for="tipo">Tipo:</label><br>
        <select name="tipo" id="tipo" title="tipo">
          <option value="Branco">Branco</option>
          <option value="Espumante">Espumante</option>
          <option value="Frisante">Frisante</option>
          <option value="Licoroso">Licoroso</option>
          <option value="Rosê">Rosê</option>
          <option value="Tinto">Tinto</option>
          
              
        </select>
        
        <br><br>
        <label for="origem">País:</label><br>
        <select name="origem" id="origem" title="origem">
          <option value="África do Sul">África do Sul</option>
          <option value="Alemanha">Alemanha</option>       
          <option value="Argentina">Argentina</option>
          <option value="Austrália">Austrália</option>
          <option value="Brasil">Brasil</option>
          <option value="Chile">Chile</option>
          <option value="Espanha">Espanha</option>
          <option value="Estados Unidos">Estados Unidos</option>
          <option value="França">França</option>
          <option value="Itália">Itália</option>
          <option value="Nova Zelândia">Nova Zelândia</option>
          <option value="Portugal">Portugal</option>
          <option value="Uruguai">Uruguai</option>
          <option value="Grécia">Grécia</option>
          <option value="Hungria">Hungria</option>
          <option value="Líbano">Líbano</option>
          <option value="Marrocos">Marrocos</option>          
          
              
        </select>
        
        <br><br>
        <label for="preco">Preço:</label><br>
        <input type="preco" name="preco" id="preco">
        <br><br>

        <label for="estoque">Estoque:</label><br>
        <input type="number" name="estoque" id="estoque">
        <br><br>

        <label for="descricao">Descrição:</label><br>
        <textarea name="descricao" cols="50" rows="5" required id="descricao" title="descricao"></textarea>

        <br><br>
        <label for="especificacao">Especificações</label><br>
        <textarea name="especificacao" cols="50" rows="5" required id="especificacao" title="especificacao"></textarea>
        <br><br>

        <label for="foto_principal">Foto Principal:</label><br>
        <input name="foto_principal" type="file" required id="foto_principal" title="foto_principal">
        <br><br>
        <label for="foto2">Imagem1:</label><br>
        <input type="file" name="foto2" id="foto2">
        <br><br>
        <label for="foto3">Imagem2:</label><br>
        <input type="file" name="foto3" id="foto3">

        <br><br>
        <input name="enviar" type="submit" id="enviar" title="enviar" value="Enviar">
        </form>

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