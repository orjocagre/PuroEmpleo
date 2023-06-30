<?php

require_once("../modelo/fabrica_modelo.php");

class Login_Controlador {
    
    public function esFabrica($idUsuario) {
        $fabrica = new Fabrica();
        return $fabrica->esfabrica($idUsuario);
    }

}



?>