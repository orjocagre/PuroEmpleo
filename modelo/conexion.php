<?php
class CConexion
{
    public static function ConexionBD()
    {


        
        $host = "bepbpehtkmlvwptycspk-postgresql.services.clever-cloud.com";
        // $host = "b7wh7en78fhwxbtfds8b-postgresql.services.clever-cloud.com";
        // $dbname = "b7wh7en78fhwxbtfds8b";
        $dbname = "bepbpehtkmlvwptycspk";
        $username = "uqwv3xwcxq45cskcb1xy";
        $password = "8G7wBLZqK1tIq84xELRiVIzNsdcNxL";
        $port = "50013";



        try {
            //$conexion=new PDO("postgre:host=$servidor;dbname=album", $usuario, $contrasenia);
            $conexion = new PDO("pgsql:host=$host; port=$port; dbname=$dbname", $username, $password);
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $error) {
            return null;
        }
        return $conexion;
    }


    public static function buscarBD($sql)
    {
        $conexion = self::ConexionBD();
        if ($conexion != null) {
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetchAll();
            return $resultado;
        } else {
            return null;
        }
    }

    public static function insertarBD($sql)
    {
        $conexion = self::ConexionBD();
        if ($conexion != null) {
            $conexion->exec($sql);
            return $conexion->lastInsertId();
        } else {
            return 0;
        }
    }
}
