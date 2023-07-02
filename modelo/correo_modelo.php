<?php
include_once("conexion.php");

class CorreoModelo {
     
    public function insertarCorreo($descripcion) {
        $sql = "insert into correo (descripcion) values ('$descripcion')";
        return CConexion::insertarBD($sql);
    }
}
?>