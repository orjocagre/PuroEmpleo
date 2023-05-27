<?php
require_once("../modelo/ofertas_modelo.php");
$busqueda = new Busqueda_Controlador();

class Busqueda_Controlador {

    
    public function __construct()
    {
        $ofertas = new Oferta();
        $datosOferta = $ofertas->buscarOfertas();
        include "../vista/busqueda_vista.php";
    }
}



?>