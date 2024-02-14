<?php

$servidor="bepbpehtkmlvwptycspk-postgresql.services.clever-cloud.com";
$BaseDatos="bepbpehtkmlvwptycspk";
$usuario="uqwv3xwcxq45cskcb1xy";
$password="8G7wBLZqK1tIq84xELRiVIzNsdcNxL";
$port = "50013";

//$conexion=pg_connect("host=localhost dbname=PRUEBA2 user=postgres password=root11");
try {
    $conexion=new PDO("pgsql:host=$servidor;port=$port;dbname=$BaseDatos",$usuario,$password);
} catch (Exception $ex){
    echo $ex->getMessage();
}
?>