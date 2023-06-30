<?php 
session_start();
$_SESSION['logueado'] = false;

header("location:./vista/principal.php");

?>