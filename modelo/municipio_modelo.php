<?php
include_once("conexion.php");

class MunicipioModelo {
     
    public function buscarMunicipio() {
        $sql = "select id_municipio as id, nombre as nombre from municipio";
        $resultado = CConexion::buscarBD($sql);
        return $resultado;
    }
}
?>