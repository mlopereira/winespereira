<?php

include 'conexao.php';

$consulta = $pdo->query('SELECT * FROM produtos');

while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
	
	echo "Produto: {$linha['produto']}<br>";
	echo "Tipo: {$linha['tipo']}<br>";
	echo "Preço: {$linha['preco']}<br>";
	echo "Estoque: {$linha['estoque']}<br><br>";
	echo "<img src=img/{$linha['foto_principal']} width=300 height=200> <br><br>";
};





?>