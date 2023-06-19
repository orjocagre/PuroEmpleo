<?php
require_once("../modelo/fabrica_modelo.php");
require_once("../modelo/ofertas_modelo.php");

class Perfil_fabrica_Controlador {

    public $datosFabrica;
    public $datosOferta;

    
    public function __construct($id_fabrica)
    {
        $fabrica = new Fabrica();
        $this->datosFabrica = $fabrica->buscarFabrica($id_fabrica);

        $ofertas = new Oferta();
        $this->datosOferta = $ofertas->buscarOfertasPorFabrica($id_fabrica);
    }

}