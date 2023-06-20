<?php
require_once("../modelo/direccion_modelo.php");
require_once("../modelo/barrio_modelo.php");
require_once("../modelo/municipio_modelo.php");
require_once("../modelo/puesto_modelo.php");

class Agregar_Oferta_Controlador {

    public $datosMunicipio;
    public $datosBarrio;
    public $datosPuesto;
    
    public function __construct()
    {
        $municipio = new MunicipioModelo();
        $this->datosMunicipio = $municipio->buscarMunicipio();

        $barrio = new BarrioModelo();
        $this->datosBarrio = $barrio->buscarBarrio();

        $puesto = new PuestoModelo();
        $this->datosPuesto = $puesto->buscarPuesto();
    }

}



?>