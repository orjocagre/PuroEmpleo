<?php
include_once("conexion.php");

class Trabajador
{

    public function buscarTrabajador($id)
    {

        // Recibe el id del usuario
        $sql = "
        SELECT
        empleado.id_usuario as idusuario,
        persona.id_persona as idpersona,
        persona.cedula as cedula,
        persona.primernombre as primernombre,
        persona.segundonombre as segundonombre,
        persona.primerapellido as primerapellido,
        persona.segundoapellido as segundoapellido,
        persona.edad as edad,
        sexo.descripcion as sexo,
        empleado.id as idempleado,
        empleado.foto as foto,
        puesto.nombredelpuesto as puesto,
        telefono.numero as telefono,
        correo.descripcion as correo,
        direccion.descripcion as direccion, barrio.nombre as barrio, municipio.nombre as municipio
        FROM 
        persona,
        sexo,
        empleado,
        puesto,
        direccion,
        barrio,
        municipio,
        telefono,
        correo,
        persona_correo,
        persona_direccion,
        persona_telefono
        WHERE
        persona.id_sexo = sexo.id and
        empleado.id_persona = persona.id_persona and
        empleado.id_puesto = puesto.id and
        telefono.id = persona_telefono.id_telefono and
        persona.id_persona = persona_telefono.id_persona and
        direccion.id = persona_direccion.id_direccion and
        direccion.id_barrio = barrio.id_barrio and 
        barrio.id_municipio = municipio.id_municipio and
        persona.id_persona = persona_direccion.id_persona and
        correo.id = persona_correo.id_correo and
        persona.id_persona = persona_correo.id_persona and
        empleado.id_usuario = ".$id;
        $resultado = CConexion::buscarBD($sql);
        return $resultado;
    }

    public function buscarExperiencia($id)
    {
        $sql = "select experiencia.id as id, experiencia.fecha_inicio as inicio, experiencia.fecha_final as final, puesto.nombredelpuesto as puesto, experiencia.descripcion as descripcion from experiencia, puesto, empleado where experiencia.id_puesto = puesto.id and experiencia.id_empleado = empleado.id and empleado.id_usuario = ".$id;
        $resultado = CConexion::buscarBD($sql);
        return $resultado;
    }


    // public function insertarOferta($id_puesto, $id_fabrica, $salario, $horario, $prestaciones, $descripcion, $id_direccion)
    // {
    //     $sql = "insert into vacante (id_puesto, id_fabrica, id_estado_vacante, fecha, salario, horario, prestaciones, id_usuario_fabrica, descripcion, id_direccion) values ($id_puesto, $id_fabrica, 1, '" . date("Y-m-d") . "', $salario, '$horario', '$prestaciones', 1, '$descripcion', $id_direccion)";
    //     echo $sql;
    //     CConexion::insertarBD($sql);
    // }
}
