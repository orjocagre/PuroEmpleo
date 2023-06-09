<?php
include_once("conexion.php");

class Oferta {
     
    public function buscarOfertas($puesto, $ubicacion) {

        $sql = "select puesto.id as id, puesto.nombredelpuesto as puesto, fabrica.nombre as fabrica, fabrica.id as idfabrica, fabrica.logo as logo, direccion.descripcion as direccion, barrio.nombre as barrio, municipio.nombre as municipio, vacante.fecha as fecha, vacante.horario as horario, vacante.salario as salario, vacante.descripcion_salario as salariodesc, vacante.prestaciones as prestaciones, vacante.descripcion as descripcion from puesto, fabrica, vacante, direccion, fabrica_direccion, barrio, municipio where vacante.id_fabrica = fabrica.id and vacante.id_puesto = puesto.id and vacante.id_direccion = direccion.id and direccion.id_barrio = barrio.id_barrio and barrio.id_municipio = municipio.id_municipio and (barrio.nombre like '%".$ubicacion."%' or direccion.descripcion like '%".$ubicacion."%' or municipio.nombre like '%".$ubicacion."%') and puesto.nombredelpuesto like '%".ucfirst(strtolower($puesto))."%'";
        $resultado = CConexion::buscarBD($sql);
        return $resultado;
    }

    public function buscarOfertasPorFabrica($idfabrica) {

        $sql = "select puesto.id as id, puesto.nombredelpuesto as puesto, fabrica.nombre as fabrica, fabrica.id as idfabrica, fabrica.logo as logo, direccion.descripcion as direccion, barrio.nombre as barrio, municipio.nombre as municipio, vacante.fecha as fecha, vacante.horario as horario, vacante.salario as salario, vacante.descripcion_salario as salariodesc, vacante.prestaciones as prestaciones, vacante.descripcion as descripcion from puesto, fabrica, vacante, direccion, barrio, municipio where vacante.id_fabrica = fabrica.id and vacante.id_puesto = puesto.id and vacante.id_direccion = direccion.id and direccion.id_barrio = barrio.id_barrio and barrio.id_municipio = municipio.id_municipio and fabrica.id = ".$idfabrica;
        $resultado = CConexion::buscarBD($sql);
        return $resultado;
    }

    public function buscarOfertasPorUsuarioFabrica($idusuario) {

        $sql = "select puesto.id as id, puesto.nombredelpuesto as puesto, fabrica.nombre as fabrica, fabrica.id as idfabrica, fabrica.logo as logo, direccion.descripcion as direccion, barrio.nombre as barrio, municipio.nombre as municipio, vacante.fecha as fecha, vacante.horario as horario, vacante.salario as salario, vacante.descripcion_salario as salariodesc, vacante.prestaciones as prestaciones, vacante.descripcion as descripcion from puesto, fabrica, vacante, direccion, barrio, municipio, usuario_fabrica where vacante.id_fabrica = fabrica.id and vacante.id_puesto = puesto.id and vacante.id_direccion = direccion.id and direccion.id_barrio = barrio.id_barrio and barrio.id_municipio = municipio.id_municipio and fabrica.id = usuario_fabrica.id_fabrica and usuario_fabrica.id_usuario = ".$idusuario;
        $resultado = CConexion::buscarBD($sql);
        return $resultado;
    }

    public function buscarOfertasPorEmpleado($idempleado) {

        $sql = "select puesto.id as id, puesto.nombredelpuesto as puesto, fabrica.nombre as fabrica, fabrica.id as idfabrica, fabrica.logo as logo, direccion.descripcion as direccion, barrio.nombre as barrio, municipio.nombre as municipio, vacante.fecha as fecha, vacante.horario as horario, vacante.salario as salario, vacante.descripcion_salario as salariodesc, vacante.prestaciones as prestaciones, vacante.descripcion as descripcion, estado_solicitud_empleo.descricion as estado from puesto, fabrica, vacante, direccion, barrio, municipio, solicitud_empleo, empleado, estado_solicitud_empleo where vacante.id_fabrica = fabrica.id and vacante.id_puesto = puesto.id and vacante.id_direccion = direccion.id and direccion.id_barrio = barrio.id_barrio and barrio.id_municipio = municipio.id_municipio and solicitud_empleo.id_vacante = vacante.id and solicitud_empleo.id_empleado = empleado.id and estado_solicitud_empleo.id = solicitud_empleo.id_estado_solicitud_empleo and empleado.id_usuario = ".$idempleado;
        $resultado = CConexion::buscarBD($sql);
        return $resultado;
    }

    public function insertarOferta($id_puesto, $id_fabrica, $salario, $horario, $prestaciones, $descripcion, $id_direccion, $id_usuario_fabrica) {
        $sql = "insert into vacante (id_puesto, id_fabrica, id_estado_vacante, fecha, salario, horario, prestaciones, id_usuario_fabrica, descripcion, id_direccion) values ($id_puesto, $id_fabrica, 1, '".date("Y-m-d")."', $salario, '$horario', '$prestaciones', $id_usuario_fabrica, '$descripcion', $id_direccion)";
        echo $sql;
        CConexion::insertarBD($sql);
    }
}
?>