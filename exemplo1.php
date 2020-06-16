<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Exemplo PDO</title>
<link href="css.css" rel="stylesheet">
</head>
<body>

<?php

include 'conexao.php';

?>

<div id="login">
<h3> Login </h3>

<form method="post" action="consultaUsuario.php" name="login">
		
		<label> E-mail: </label>
		<input type="text" name="email" autocomplete="off">
		
		<label> Senha: </label>
		<input type="password" name="senha" autocomplete="off">
		
		<input type="submit" class="button" name="enviar" value="Login">
		
		</form>

</div>

<body>
</body>
</html>