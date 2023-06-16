<?php
include_once("conexion.php");

class PuestoModelo {
     
    public function buscarPuesto() {
        $sql = "select puesto.id as id, puesto.nombredelpuesto as nombre from puesto";
        $resultado = CConexion::buscarBD($sql);
        return $resultado;
    }
}
?>