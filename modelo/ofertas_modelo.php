<?php
include_once("conexion.php");

class Oferta {
     
    public function buscarOfertas() {
        $sql = "select puesto.id as id, puesto.nombredelpuesto as puesto, fabrica.nombre as fabrica, vacante.fecha as fecha, vacante.horario as horario, vacante.salario as salario, vacante.prestaciones as prestaciones, vacante.descripcion as descripcion from puesto, fabrica, vacante where vacante.id_fabrica = fabrica.id and vacante.id_puesto = puesto.id";
        $resultado = CConexion::buscarBD($sql);
        return $resultado;
    }
}
?>