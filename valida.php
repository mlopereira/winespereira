<?php

session_start();
//consultaUsuario.php
include 'conexao.php';


$recebe_email = $_POST['email'];
$recebe_senha = $_POST['senha'];


$buscaUsuario = $pdo->prepare("SELECT * FROM clientes WHERE email=:emailseguro AND senha=:senhaseguro");

$buscaUsuario->bindValue(":emailseguro",$recebe_email);
$buscaUsuario->bindValue(":senhaseguro",$recebe_senha);
$buscaUsuario->execute();


if ($buscaUsuario->rowCount()==1) {
	$resultado=$buscaUsuario->fetchObject();
	
	if ($resultado->admin =='1') {
		
		$_SESSION['email'] = $recebe_email;
		$_SESSION['senha'] = $recebe_senha;
		$_SESSION['admin'] = 1;
				
		header('location:admin.php');
		
	}
else {
	
	$recebe_id = $resultado->id;
	
	$_SESSION['email'] = $recebe_email;
	$_SESSION['senha'] = $recebe_senha;
	$_SESSION['id'] = $recebe_id;
	$_SESSION['admin'] = 0;
	
	//echo $_SESSION['id'];
	
	header('location:index.php');
}
}
else {
	echo "Usuário e senha não cadastrados !!!";
}

?>