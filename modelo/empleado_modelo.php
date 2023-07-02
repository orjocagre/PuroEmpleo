<?php
include_once("conexion.php");

class Empleado {
     
    // public function buscarFabrica($id_persona) {

    //     $sql = "select fabrica.nombre as nombre, fabrica.logo as logo, fabrica.promedio_califiacione as calificacion, fabrica.descripcion as descripcion, fabrica.jornada as jornada, fabrica.empleados as empleados, direccion.descripcion as direccion, barrio.nombre as barrio, municipio.nombre as municipio, telefono.numero as telefono, correo.descripcion as correo from fabrica, direccion, barrio, municipio, telefono, correo, fabrica_direccion, fabrica_correo, fabrica_telefono where fabrica.id = fabrica_telefono.id_persona and fabrica_telefono.id_telefono = telefono.id and fabrica.id = fabrica_correo.id_persona and fabrica_correo.id_correo = correo.id and fabrica_direccion.id_persona = fabrica.id and fabrica_direccion.id_direccion = direccion.id and direccion.id_barrio = barrio.id_barrio and barrio.id_municipio = municipio.id_municipio and fabrica.id = ".$id_persona;
    //     $resultado = CConexion::buscarBD($sql);
    //     return $resultado;
    // }

    
    public function insertarEmpleado($primernombre, $segundonombre, $primerapellido, $segundoapellido, $cedula, $edad, $id_sexo, $id_usuario, $foto, $cv, $id_puesto, $fecha_ingreso, $telefono, $iddireccion, $idcorreo, $idtelefono) {
        
        $sql = "insert into persona (primernombre, segundonombre, primerapellido, segundoapellido, cedula, edad, id_sexo) values ('$primernombre', '$segundonombre', '$primerapellido', '$segundoapellido', '$cedula', $edad, $id_sexo)";
        $id_persona = CConexion::insertarBD($sql);

        $sql = "insert into curriculum (descripcion) values ('$cv')";
        $id_curriculum = CConexion::insertarBD($sql);

        $sql = "insert into empleado (id_persona, id_curiculum, id_usuario, foto, cv, id_puesto, fecha_ingreso, telefono) values ($id_persona, $id_curriculum, $id_usuario, '$foto', '$cv', $id_puesto, '$fecha_ingreso', $telefono)";
        $idempleado = CConexion::insertarBD($sql);

        $sql = "insert into persona_direccion (id_persona,id_direccion) values ($id_persona,$iddireccion)";
        CConexion::insertarBD($sql);

        $sql = "insert into persona_correo (id_persona,id_correo) values ($id_persona,$idcorreo)";
        CConexion::insertarBD($sql);

        $sql = "insert into persona_telefono (id_persona,id_telefono) values ($id_persona,$idtelefono)";
        CConexion::insertarBD($sql);
    }

}
