<?php
class CConexion {
    public static function ConexionBD() {
        $host = "";
        $dbname = "";
        $username="";
        $password="";

        try{
            //$conexion=new PDO("postgre:host=$servidor;dbname=album", $usuario, $contrasenia);
            $conn=new PDO("pgsql:host=$host; dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);            
        }
        catch(PDOException $error){
            //echo "conexion erronea".$error;
            return null;
        }
        return $conn;
    }


    public static function BusquedaBD($sql) {
        $conexion = self::ConexionBD();
        if($conexion != null) {
            $conexion->exec($sql);
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetchAll();
            return $resultado;
        }
        else {
            return null;
        }
    }

}
?>