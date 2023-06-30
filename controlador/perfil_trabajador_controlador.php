<?php
require_once("../modelo/trabajador_modelo.php");
require_once("../modelo/ofertas_modelo.php");

class Perfil_trabajador_Controlador {

    public $datosTrabajador;
    public $datosExperiencia;
    public $datosOferta;

    
    public function __construct($id)
    {
        $trabajador = new Trabajador();
        $this->datosTrabajador = $trabajador->buscarTrabajador($id);
        $this->datosExperiencia = $trabajador->buscarExperiencia($id);
        
        $oferta = new Oferta();
        $this->datosOferta = $oferta->buscarOfertasPorEmpleado($id);

    }

}