<?php
require_once("../modelo/ofertas_modelo.php");
require_once("../modelo/municipio_modelo.php");
require_once("../modelo/barrio_modelo.php");
require_once("../modelo/puesto_modelo.php");
require_once("../modelo/fabrica_modelo.php");

class Crear_Editar_Perfil_Controlador {

    public $datosOferta;
    public $datosMunicipio;
    public $datosBarrio;
    public $datosPuesto;
    public $datosFabrica;

    
    public function __construct($id)
    {
        $ofertas = new Oferta();
        $this->datosOferta = $ofertas->buscarOfertasPorUsuarioFabrica($id);
        
        $fabrica = new Fabrica();
        $this->datosFabrica = $fabrica->buscarFabrica($id);

        $municipio = new MunicipioModelo();
        $this->datosMunicipio = $municipio->buscarMunicipio();

        $barrio = new BarrioModelo();
        $this->datosBarrio = $barrio->buscarBarrio();

        $puesto = new PuestoModelo();
        $this->datosPuesto = $puesto->buscarPuesto();
    }

}
?>