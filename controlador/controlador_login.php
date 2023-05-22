<?php
session_start();
if(!empty($_POST["btningresar"])){
    if(!empty($_POST["user"])) and !empty($_POST["pass"]){
        $usuario=$_POST['user'];
        $password=$_POST['pass'];
        $sql=$conexion->$query("SELECT * FROM usuario WHERE nombre_usuario='$usuario' AND contrasegna='$password'");
        if ($datos=$sql->fetch_oject()) {
            $_SESSION["id"]=$datos->id;
            $_SESSION["nombre"]=$datos->nombre;
            header("location: index.html")
        } else {
            echo"<div> Acceso denegado<div>";
        }
        
    }else{
        echo "Rellene los campos";
        
    }
 }
?>