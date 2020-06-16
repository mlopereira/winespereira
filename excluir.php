<?php

include 'conexao.php';

$id_prod=$_GET['id'];


$pasta = "img/";

$consulta = $pdo->query("SELECT * FROM produtos WHERE id='$id_prod'");
$exibe = $consulta->fetch(PDO::FETCH_ASSOC);


$excluir = $pdo->query("DELETE FROM produtos WHERE id='$id_prod'");

$foto_principal=$exibe['foto_principal'];
$foto2=$exibe['foto2'];
$foto3=$exibe['foto3'];


if ($foto_principal!="") {
	
	unlink($pasta.$foto_principal);
	
}


if ($foto2!="") {
	
	unlink($pasta.$foto2);
	
}

if ($foto3!="") {
	
	unlink($pasta.$foto3);
	
}

header("location:admin.php");

?>