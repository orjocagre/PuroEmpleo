<?php

$servidor="localhost";
$BaseDatos="PRUEBA2";
$usuario="postgres";
$password="root11";

//$conexion=pg_connect("host=localhost dbname=PRUEBA2 user=postgres password=root11");
try {
    $conexion=new PDO("pgsql:host=$servidor;dbname=$BaseDatos",$usuario,$password);
} catch (Exception $ex){
    echo $ex >getMessage();
}
?>