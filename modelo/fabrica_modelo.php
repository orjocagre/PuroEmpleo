<?php
include_once("conexion.php");

class Fabrica {
     
    public function buscarFabrica($id_fabrica) {

        $sql = "select fabrica.nombre as nombre, fabrica.promedio_califiacione as calificacion, fabrica.descripcion as descripcion, direccion.descripcion as direccion, barrio.nombre as barrio, municipio.nombre as municipio, telefono.numero as telefono, correo.descripcion as correo from fabrica, direccion, barrio, municipio, telefono, correo, fabrica_direccion, fabrica_correo, fabrica_telefono where fabrica.id = fabrica_telefono.id_fabrica and fabrica_telefono.id_telefono = telefono.id and fabrica.id = fabrica_correo.id_fabrica and fabrica_correo.id_correo = correo.id and fabrica_direccion.id_fabrica = fabrica.id and fabrica_direccion.id_direccion = direccion.id and direccion.id_barrio = barrio.id_barrio and barrio.id_municipio = municipio.id_municipio and fabrica.id = ".$id_fabrica;
        $resultado = CConexion::buscarBD($sql);
        return $resultado;
    }
}
?>