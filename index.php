<?php 
session_start();
$_SESSION['logueado'] = false;
$_SESSION['idU'] = 0;
$_SESSION['nomU'] = "";
$_SESSION['esfabrica'] = false;

header("location:./vista/principal.php");

?>