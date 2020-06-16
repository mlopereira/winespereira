<?php ob_start();?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Wine´s Pereira - Logon de usuário</title>
	
<meta name="viewport" content="width=device-width, initial-scale=1">
	
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
<script src="jquery.mask.js"></script>

<script>
	
	
	
$(document).ready(function(){
	
$('#preco').mask('000.000.000.000.000,00', {reverse: true});	
	
});
	
</script>
	
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
	
	
	$id_prod = $_GET['id'];
	
	
	include 'conexao.php';	
	include 'nav.php';
	
	
	
	$consulta = $pdo->query("SELECT * FROM produtos WHERE id='$id_prod'");
	$exibe = $consulta->fetch(PDO::FETCH_ASSOC)
	
	?>
	
	
	<div class="container-fluid">
	
		<div class="row">
		
			<div class="col-sm-4 col-sm-offset-4">
				
				<h2>Alteração de produto</h2>
				
				<form method="post" action="alterarProduto.php?id=<?php echo $id_prod?>" name="incluiProd" enctype="multipart/form-data">
				
					<div class="form-group">
				
						<label for="produto">Produto</label>
						<input type="text" name="produto" value="<?php echo $exibe['produto']; ?>"  class="form-control" required id="produto">
					</div>
				
				<div class="form-group">
					
					
					<label for="tipo">Tipo</label>
					
					<select class="form-control" name="tipo">
					  <option value="Branco" <?=($exibe['tipo'] == 'Branco')?'selected':''?>>Branco</option>
					  <option value="Espumante" <?=($exibe['tipo'] == 'Espumante')?'selected':''?>>Espumante</option>
					  <option value="Frisante" <?=($exibe['tipo'] == 'Frisante')?'selected':''?>>Frisante</option>
					  <option value="Licoroso" <?=($exibe['tipo'] == 'Licoroso')?'selected':''?>>Licoroso</option>
					  <option value="Rosé" <?=($exibe['tipo'] == 'Rosé')?'selected':''?>>Rosé</option>
					   <option value="Tinto" <?=($exibe['tipo'] == 'Tinto')?'selected':''?>>Tinto</option>
					</select>

			
					</div>
					
					
					
					<div class="form-group">
				
					<label for="origem">Origem</label>
					
					<select class="form-control" name="origem">
					  	<option value="África do Sul" <?=($exibe['origem'] == 'África do Sul')?'selected':''?>>África do Sul</option>
				      	<option value="Alemanha" <?=($exibe['origem'] == 'Alemanha')?'selected':''?>>Alemanha</option>
						<option value="Argentina" <?=($exibe['origem'] == 'Argentina')?'selected':''?>>Argentina</option>
						<option value="Austrália" <?=($exibe['origem'] == 'Austrália')?'selected':''?>>Austrália</option>
						<option value="Brasil" <?=($exibe['origem'] == 'Brasil')?'selected':''?>>Brasil</option>
						<option value="Chile" <?=($exibe['origem'] == 'Chile')?'selected':''?>>Chile</option>
						<option value="Espanha" <?=($exibe['origem'] == 'Espanha')?'selected':''?>>Espanha</option>
						<option value="Estados Unidos" <?=($exibe['origem'] == 'Estados Unidos')?'selected':''?>>Estados Unidos</option>
						<option value="França" <?=($exibe['origem'] == 'França')?'selected':''?>>França</option>
						<option value="Itália" <?=($exibe['origem'] == 'Itália')?'selected':''?>>Itália</option>
						<option value="Nova Zelândia" <?=($exibe['origem'] == 'Nova Zelândia')?'selected':''?>>Nova Zelândia</option>
						<option value="Portugal" <?=($exibe['origem'] == 'Portugal')?'selected':''?>>Portugal</option>
						<option value="Uruguai" <?=($exibe['origem'] == 'Uruguai')?'selected':''?>>Uruguai</option>
						<option value="Grécia" <?=($exibe['origem'] == 'Grécia')?'selected':''?>>Grécia</option>
						<option value="Hungria" <?=($exibe['origem'] == 'Hungria')?'selected':''?>>Hungria</option>
						<option value="Líbano" <?=($exibe['origem'] == 'Líbano')?'selected':''?>>Líbano</option>
						<option value="Marrocos" <?=($exibe['origem'] == 'Marrocos')?'selected':''?>>Marrocos</option>
					  
					</select>

					</div>
					
					<div class="form-group">
				
					<label for="preco">Preço</label>
					
					<input type="text" class="form-control" required name="preco" value="<?php echo $exibe['preco']; ?>" id="preco">

					</div>
					
					<div class="form-group">
				
					<label for="estoque">Estoque</label>
					
					<input type="number" class="form-control" required name="estoque" value="<?php echo $exibe['estoque']; ?>" id="estoque">

					</div>
										
					
					<div class="form-group">
				
					<label for="descricao">Descrição</label>
					
						<textarea rows="5" class="form-control" name="descricao"><?php echo $exibe['descricao']; ?></textarea>
						

					</div>
					
					<div class="form-group">
				
					<label for="especificacao">Especificação</label>
					
						<textarea rows="5" class="form-control" name="especificacao"><?php echo $exibe['especificacao']; ?></textarea>
						

					</div>
					
										
					<div class="form-group">
				
					<label for="foto_principal">Foto Principal</label>
					
					<input type="file" accept="img/*" class="form-control" required name="foto_principal" id="foto_principal">

					</div>
					
					<div class="form-group">
						
					<img src="img/<?php echo $exibe['foto_principal']; ?>" width="100px" >
						
					</div>
					
					<div class="form-group">
				
					<label for="foto2">Foto 2</label>
					
					<input type="file" accept="img/*" class="form-control" required name="foto2" id="foto2">

					</div>
					
					<div class="form-group">
						
					<img src="img/<?php echo $exibe['foto2']; ?>" width="100px" >
						
					</div>
					
					<div class="form-group">
				
					<label for="foto2">Foto 3</label>
					
					<input type="file" accept="img/*" class="form-control" required name="foto3" id="foto3">

					</div>
					
					<div class="form-group">
						
					<img src="img/<?php echo $exibe['foto3']; ?>" width="100px" >
						
					</div>
					
							
				<button type="submit" class="btn btn-lg btn-default">
					
					<span class="glyphicon glyphicon-pencil"> Alterar </span>
					
				</button>
				
				</form>
				<br></br>
			</div>
		</div>
	</div>
	
	
	
</body>
</html>
<?php ob_end_flush();?>