<?php
include_once("conexion.php");

class CalificacionModelo {
     
    public function listarComentarios($id_fabrica) {
        $sql = "select persona.primernombre as nombre, persona.primerapellido as apellido, calificacion.puntuacion as puntuacion, calificacion.comentario as comentario, calificacion.fecha as fecha from persona, empleado, calificacion where calificacion.id_empleado = empleado.id and empleado.id_persona = persona.id_persona and calificacion.comentario != '' and calificacion.id_fabrica = ".$id_fabrica;
        $resultado = CConexion::buscarBD($sql);
        return $resultado;
    }
}
?>

<!-- select persona.primernombre as nombre, persona.primerapellido as apellido, calificacion.puntuacion as puntuacion, calificacion.comentario as comentario, calificacion.fecha as fecha from persona, empleado, calificacion where calificacion.id_empleado = empleado.id and empleado.id_persona = persona.id_persona and calificacion.comentario != '' and calificacion.id_fabrica = 1

select * from calificacion
select * from persona
select * from empleado
select * from fabrica


insert into calificacion(id_empleado, id_fabrica, puntuacion, comentario, fecha) values (1,1,4,'','2023-06-18')
update calificacion set comentario = 'Muy buen ambiente laboral' where calificacion.puntuacion = 4 -->