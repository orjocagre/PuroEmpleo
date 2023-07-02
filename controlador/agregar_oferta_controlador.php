<?php
require_once("../modelo/fabrica_modelo.php");
require_once("../modelo/direccion_modelo.php");
require_once("../modelo/barrio_modelo.php");
require_once("../modelo/municipio_modelo.php");
require_once("../modelo/puesto_modelo.php");
require_once("../modelo/ofertas_modelo.php");

class Agregar_Oferta_Controlador {

    public $datosMunicipio;
    public $datosBarrio;
    public $datosPuesto;
    public $datosFabrica;
    
    public function __construct($id)
    {
        $municipio = new MunicipioModelo();
        $this->datosMunicipio = $municipio->buscarMunicipio();

        $barrio = new BarrioModelo();
        $this->datosBarrio = $barrio->buscarBarrio();

        $puesto = new PuestoModelo();
        $this->datosPuesto = $puesto->buscarPuesto();

        $fabrica = new Fabrica();
        $this->datosFabrica = $fabrica->buscarFabricaPorUsuario($id);
    }

    public function insertarOferta($descripcion_direccion, $id_barrio, $id_puesto, $id_usuario, $salario, $horario, $prestaciones, $descripcion) {
        $direccion = new DireccionModelo();
        $id_direccion = $direccion->insertarDireccion($descripcion_direccion, $id_barrio);

        $fabrica = new Fabrica();
        $id_fabrica = ($fabrica->buscarIdFabrica($id_usuario))[0]['id'];
        $id_usuario_fabrica = ($fabrica->buscarUsuarioDeFabrica($id_usuario))[0]['id'];

        $oferta = new Oferta();
        $oferta->insertarOferta($id_puesto, $id_fabrica, $salario, $horario, $prestaciones, $descripcion, $id_direccion, $id_usuario_fabrica);

    }
}



?>