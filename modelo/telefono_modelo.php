<?php
include_once("conexion.php");

class TelefonoModelo {
     
    public function insertarTelefono($numero) {
        $sql = "insert into telefono (numero) values ($numero)";
        return CConexion::insertarBD($sql);
    }
}
?>