<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Exemplo PDO - INSERT</title>
<link href="css.css" rel="stylesheet">
</head>
<body>

<?php

include 'conexao.php';

?>

<div id="login">
<h3> Login </h3>

<form method="post" action="inserirUsuario.php" name="login">
		
		<label>Nome:</label>
		<input type="text" name="nome" size="40">
		
		<label>Endereço:</label>
		<input type="text" name="endereco" size="50">
		
		<label>Nº:</label>
		<input type="text" name="numero" size="5">
		
		<label>Bairro:</label>
		<input type="text" name="bairro" size="40">
		
		<label>Cidade:</label>
		<input type="text" name="cidade" size="40">
		
		<label>Estado:</label>
		<input type="text" name="estado" size="2">
		
		<label>E-mail:</label>
		<input type="text" name="email" size="60">
		
		<label> Senha: </label>
		<input type="password" name="senha" size="15">
		
		<input type="submit" class="button" name="enviar" value="Cadastrar">
		
		
		</form>

</div>

<body>
</body>
</html>