<?php

$servidor="b7wh7en78fhwxbtfds8b-postgresql.services.clever-cloud.com";
$BaseDatos="b7wh7en78fhwxbtfds8b";
$usuario="uqwv3xwcxq45cskcb1xy";
$password="8G7wBLZqK1tIq84xELRiVIzNsdcNxL";

//$conexion=pg_connect("host=localhost dbname=PRUEBA2 user=postgres password=root11");
try {
    $conexion=new PDO("pgsql:host=$servidor;dbname=$BaseDatos",$usuario,$password);
} catch (Exception $ex){
    echo $ex->getMessage();
}
?>