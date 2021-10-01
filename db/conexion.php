<?php

class Conectar{

    public static function conexion(){

        include"../../config.php";        

        $conexion=new mysqli($host, $user, $pass, $db);

        $conexion->query("SET NAMES 'utf8'");

        return $conexion;

    }

} 

?>

