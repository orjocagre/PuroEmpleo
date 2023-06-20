<?php
include_once("conexion.php");

class DireccionModelo {
     
    // public function buscarDireccion() {
    //     $sql = "select puesto.id as id, puesto.nombre as puesto, fabrica.nombre as fabrica, vacante.fecha as fecha, vacante.horario as horario, vacante.salario as salario, vacante.prestaciones as prestaciones, vacante.descripcion as descripcion from puesto, fabrica, vacante where vacante.id_fabrica = fabrica.id and vacante.id_puesto = puesto.id";
    //     $resultado = CConexion::buscarBD($sql);
    //     return $resultado;
    // }

    public function insertarDireccion($descripcion, $id_barrio) {
        $sql = "insert into direccion (descripcion, id_barrio) values ('$descripcion', $id_barrio)";
        return CConexion::insertarBD($sql);
    }
}
?>