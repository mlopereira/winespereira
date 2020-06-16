<?php ob_start();?>
<?php
session_start();
unset($_SESSION['email']);

session_destroy();

header("location:index.php");

?>
<?php ob_end_flush();?>