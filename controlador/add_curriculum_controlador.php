<?php
require_once("../modelo/empleado_modelo.php");
require_once("../modelo/direccion_modelo.php");
require_once("../modelo/telefono_modelo.php");
require_once("../modelo/correo_modelo.php");
require_once("../modelo/barrio_modelo.php");
require_once("../modelo/municipio_modelo.php");
require_once("../modelo/puesto_modelo.php");


class Add_Curriculum_Controlador {

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

    public function insertarCurriculum($descdireccion, $id_barrio, $numtelefono, $dircorreo, $primernombre, $segundonombre, $primerapellido, $segundoapellido, $cedula, $edad, $id_sexo, $id_usuario, $foto, $cv, $id_puesto, $fecha_ingreso) {
        $direccion = new DireccionModelo();
        $id_direccion = $direccion->insertarDireccion($descdireccion, $id_barrio);

        $telefono = new TelefonoModelo();
        $id_telefono = $telefono->insertarTelefono($numtelefono);
        
        $correo = new CorreoModelo();
        $id_correo = $correo->insertarCorreo($dircorreo);

        $empleado = new Empleado();
        $empleado->insertarEmpleado($primernombre, $segundonombre, $primerapellido, $segundoapellido, $cedula, $edad, $id_sexo, $id_usuario, $foto, $cv, $id_puesto, $fecha_ingreso, $numtelefono, $id_direccion, $id_correo, $id_telefono);

    }
}



?>