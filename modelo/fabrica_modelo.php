<?php
include_once("conexion.php");

class Fabrica {
     
    public function buscarFabrica($id_fabrica) {

        $sql = "select fabrica.nombre as nombre, fabrica.logo as logo, fabrica.promedio_califiacione as calificacion, fabrica.descripcion as descripcion, fabrica.jornada as jornada, fabrica.empleados as empleados, direccion.descripcion as direccion, barrio.nombre as barrio, municipio.nombre as municipio, telefono.numero as telefono, correo.descripcion as correo from fabrica, direccion, barrio, municipio, telefono, correo, fabrica_direccion, fabrica_correo, fabrica_telefono where fabrica.id = fabrica_telefono.id_fabrica and fabrica_telefono.id_telefono = telefono.id and fabrica.id = fabrica_correo.id_fabrica and fabrica_correo.id_correo = correo.id and fabrica_direccion.id_fabrica = fabrica.id and fabrica_direccion.id_direccion = direccion.id and direccion.id_barrio = barrio.id_barrio and barrio.id_municipio = municipio.id_municipio and fabrica.id = ".$id_fabrica;
        $resultado = CConexion::buscarBD($sql);
        return $resultado;
    }

    public function buscarFabricaPorUsuario($idusuario) {

        $sql = "select fabrica.nombre as nombre, fabrica.logo as logo, fabrica.promedio_califiacione as calificacion, fabrica.descripcion as descripcion, fabrica.jornada as jornada, fabrica.empleados as empleados, direccion.descripcion as direccion, barrio.nombre as barrio, municipio.nombre as municipio, telefono.numero as telefono, correo.descripcion as correo from fabrica, direccion, barrio, municipio, telefono, correo, fabrica_direccion, fabrica_correo, fabrica_telefono, usuario_fabrica where fabrica.id = fabrica_telefono.id_fabrica and fabrica_telefono.id_telefono = telefono.id and fabrica.id = fabrica_correo.id_fabrica and fabrica_correo.id_correo = correo.id and fabrica_direccion.id_fabrica = fabrica.id and fabrica_direccion.id_direccion = direccion.id and direccion.id_barrio = barrio.id_barrio and barrio.id_municipio = municipio.id_municipio and fabrica.id = usuario_fabrica.id_fabrica and usuario_fabrica.id_usuario = ".$idusuario;
        $resultado = CConexion::buscarBD($sql);
        return $resultado;
    }

    public function buscarIdFabrica($idusuario) {

        $sql = "select usuario_fabrica.id_fabrica as id from usuario_fabrica where usuario_fabrica.id_usuario = ".$idusuario;
        $resultado = CConexion::buscarBD($sql);
        return $resultado;
    }
    public function buscarUsuarioDeFabrica($idusuario) {

        $sql = "select usuario_fabrica.id as id from usuario_fabrica where usuario_fabrica.id_usuario = ".$idusuario;
        $resultado = CConexion::buscarBD($sql);
        return $resultado;
    }


    public function esfabrica($idusuario) {

        $sql = "select count(*) from usuario_fabrica where usuario_fabrica.id_usuario = ".$idusuario;
        $resultado = CConexion::buscarBD($sql);
        if($resultado[0]["count"] > 0) {
            return true;
        }
        else {
            return false;
        }
    }
    public function insertarFabrica($nombre, $calificaciones, $descripcion, $logo, $jornada, $empleados, $usuario, $idusuario, $iddireccion, $idcorreo, $idtelefono) {
        $sql = "insert into fabrica (nombre, promedio_califiacione, descripcion, logo, jornada, empleados) values ('$nombre',$calificaciones,'$descripcion','$logo','$jornada',$empleados)";
        $idfabrica = CConexion::insertarBD($sql);
        $sql = "insert into usuario_fabrica (id_fabrica,nombre,clave,id_usuario) values ($idfabrica,'$usuario','$usuario',$idusuario)";
        CConexion::insertarBD($sql);
        $sql = "insert into fabrica_direccion (id_fabrica,id_direccion) values ($idfabrica,$iddireccion)";
        CConexion::insertarBD($sql);
        $sql = "insert into fabrica_correo (id_fabrica,id_correo) values ($idfabrica,$idcorreo)";
        CConexion::insertarBD($sql);
        $sql = "insert into fabrica_telefono (id_fabrica,id_telefono) values ($idfabrica,$idtelefono)";
        CConexion::insertarBD($sql);
    }

}
