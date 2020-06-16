<?php ob_start();?>
<?php

session_start();

unset($_SESSION['carrinho']);

header('location:carrinho.php');

?>
<?php ob_end_flush();?>