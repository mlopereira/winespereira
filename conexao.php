<?php

$servername = "fdb19.awardspace.net";
$username = "2628572_marceloprojeto";
$password = "15mn09cp77";
$dbname = '2628572_marceloprojeto';
$driver = 'mysql';

try {
    $pdo = new PDO("$driver:host=$servername;dbname=$dbname;charset=utf8", $username, $password,
            array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e->getMessage();
}




/*try {
$pdo = new PDO("mysql:host=	fdb19.awardspace.net;dbname=2628572_minhaloja;charset=utf8", "2628572_minhaloja", "15mn09cp77",	

array (PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}catch(PDOException $e){

echo $e->getMessage();
	
}*/


?>