<?php

include 'conexao.php';

try {

$recebe_nome = $_POST['nome'];
$recebe_endereco = $_POST['endereco'];
$recebe_numero = $_POST['numero'];
$recebe_bairro = $_POST['bairro'];
$recebe_cidade = $_POST['cidade'];
$recebe_estado = $_POST['estado'];
$recebe_email = $_POST['email'];
$recebe_senha = $_POST['senha'];

$inserir = $pdo->prepare("INSERT INTO clientes (nome,endereco, numero, bairro, cidade, estado, email, senha) VALUES 




(:snome, :sendereco, :snumero, :sbairro, :scidade, :sestado, :semail, :ssenha)");

$inserir->bindValue(':snome', $recebe_nome);
$inserir->bindValue(':sendereco', $recebe_endereco);
$inserir->bindValue(':snumero', $recebe_numero);
$inserir->bindValue(':sbairro', $recebe_bairro);
$inserir->bindValue(':scidade', $recebe_cidade);
$inserir->bindValue(':sestado', $recebe_estado);
$inserir->bindValue(':semail', $recebe_email);
$inserir->bindValue(':ssenha', $recebe_senha);

$inserir->execute();

header("location:index.php");
	
}catch(PDOException $e){
	
echo "Não foi possível efetuar seu Cadastro, verifique e tente de Novo !!!";
echo $e->getMessage();
	
}


?>