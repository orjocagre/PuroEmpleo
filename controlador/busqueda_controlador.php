<?php
require_once("../modelo/ofertas_modelo.php");
require_once("../modelo/municipio_modelo.php");
require_once("../modelo/barrio_modelo.php");
require_once("../modelo/puesto_modelo.php");

class Busqueda_Controlador {

    public $datosOferta;
    public $datosMunicipio;
    public $datosBarrio;
    public $datosPuesto;
    
    public function __construct($puesto, $lugar)
    {
        $ofertas = new Oferta();
        $this->datosOferta = $ofertas->buscarOfertas($puesto, $lugar);
        
        $municipio = new MunicipioModelo();
        $this->datosMunicipio = $municipio->buscarMunicipio();

        $barrio = new BarrioModelo();
        $this->datosBarrio = $barrio->buscarBarrio();

        $puesto = new PuestoModelo();
        $this->datosPuesto = $puesto->buscarPuesto();
    }

}



?>