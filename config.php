<?php

$conexion=pg_connect("host=localhost dbname=Puro_empleo user=postgres password=root11");

if ($conexion){
    echo "Se conecto correctamente";
}else{
    echo "ha ocrrido un error";
}

?>