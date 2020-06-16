<?php

//consultaUsuario.php
include 'conexao.php';

$recebe_email = $_POST['email'];
$recebe_senha = $_POST['senha'];

$buscaUsuario = $pdo->prepare("SELECT email,senha FROM clientes WHERE email=:emailseguro AND senha=:senhaseguro;");

$buscaUsuario->bindValue(":emailseguro",$recebe_email);
$buscaUsuario->bindValue(":senhaseguro",$recebe_senha);

$buscaUsuario->execute();


if ($buscaUsuario->rowCount()==1) {
	echo "Ok! você está logado";
}
else {
	echo "Usuário e senha não encontrado !!!";
}


?>




