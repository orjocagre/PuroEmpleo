<?php
include_once("conexion.php");

class CBusquedaLogica {

    
    public function buscarOfertas() {
        $sql = "select puesto.nombre as puesto, fabrica.nombre as fabrica, vacante.fecha as fecha from puesto, fabrica, vacante where vacante.id_fabrica = fabrica.id and vacante.id_puesto = puesto.id";
        $resultado = CConexion::BusquedaBD($sql);
        return $resultado;
    }


}




?>