<?php
require_once("../modelo/fabrica_modelo.php");
require_once("../modelo/direccion_modelo.php");
require_once("../modelo/telefono_modelo.php");
require_once("../modelo/correo_modelo.php");
require_once("../modelo/barrio_modelo.php");
require_once("../modelo/municipio_modelo.php");
require_once("../modelo/ofertas_modelo.php");

class Edit_Perfil_Controlador {

    public $datosMunicipio;
    public $datosBarrio;
    
    public function __construct()
    {
        $municipio = new MunicipioModelo();
        $this->datosMunicipio = $municipio->buscarMunicipio();

        $barrio = new BarrioModelo();
        $this->datosBarrio = $barrio->buscarBarrio();

    }

    public function insertarFabrica($descdireccion, $id_barrio, $numtelefono, $dircorreo, $nombre, $calificaciones, $descripcion, $logo, $jornada, $empleados, $usuario, $idusuario) {
        $direccion = new DireccionModelo();
        $id_direccion = $direccion->insertarDireccion($descdireccion, $id_barrio);

        $telefono = new TelefonoModelo();
        $id_telefono = $telefono->insertarTelefono($numtelefono);
        
        $correo = new CorreoModelo();
        $id_correo = $correo->insertarCorreo($dircorreo);

        $fabrica = new Fabrica();
        $fabrica->insertarFabrica($nombre, $calificaciones, $descripcion, $logo, $jornada, $empleados, $usuario, $idusuario, $id_direccion, $id_correo, $id_telefono);

    }
}



?>