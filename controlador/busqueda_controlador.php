<?php
require_once("../modelo/ofertas_modelo.php");
require_once("../modelo/municipio_modelo.php");
require_once("../modelo/barrio_modelo.php");
require_once("../modelo/puesto_modelo.php");
$busqueda = new Busqueda_Controlador();

class Busqueda_Controlador {

    
    public function __construct()
    {
        $ofertas = new Oferta();
        $datosOferta = $ofertas->buscarOfertas();

        $municipio = new MunicipioModelo();
        $datosMunicipio = $municipio->buscarMunicipio();

        $barrio = new BarrioModelo();
        $datosBarrio = $barrio->buscarBarrio();

        $puesto = new PuestoModelo();
        $datosPuesto = $puesto->buscarPuesto();

        include "../vista/busqueda_vista.php";
    }
}



?>