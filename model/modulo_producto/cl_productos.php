<?php

include"../../config.php";
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
    public function Reg_Producto($nombre,$descripcion,$valor,$tienda,$imagen){
        $sql = "INSERT INTO `producto` (`nombre`, `descripcion`, `valor`, `tienda`, `imagen`) VALUES ('$nombre', '$descripcion', '$valor', '$tienda', '$imagen');";

        $res = mysqli_query($this->db, $sql);

        if($res){
            return true;
        }else{
            return false;
        }  
    }
    public function Borrar($id){
        $sql = "DELETE FROM producto WHERE sku='$id'";
        $res = mysqli_query($this->db, $sql);
        if($res){
            return true; 
        }
        else{  
            return false;    
        }  
    }
}

?>