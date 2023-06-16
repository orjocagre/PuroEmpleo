<?php
include_once("conexion.php");

class BarrioModelo {
     
    public function buscarBarrio() {
        $sql = "select id_barrio as id, barrio.nombre as nombre, municipio.nombre as municipio from barrio, municipio where barrio.id_municipio = municipio.id_municipio";
        $resultado = CConexion::buscarBD($sql);
        return $resultado;
    }
}
?>