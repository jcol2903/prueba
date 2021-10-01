<?php

include"config.php";
$ruta="C:/xampp/htdocs/prueba/php";
include $ruta."/db/conexion.php"; 

class Registros {

private $db;     

public function __construct(){

    $this->db=conectar::conexion();        

}

    public function Lista_Productos(){

        $sql = "SELECT sku, producto.nombre as producto, descripcion, valor, tienda.nombre as tienda, imagen FROM producto, tienda WHERE tienda=id";

        $res = mysqli_query($this->db, $sql);

        return $res ;

    }
    public function Lista_Tiendas(){

        $sql = "SELECT * FROM tienda";

        $res = mysqli_query($this->db, $sql);

        return $res ;

    }
}

?>