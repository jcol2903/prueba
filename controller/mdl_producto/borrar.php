<?php 
include"../../config.php";
$ruta="C:/xampp/htdocs/prueba/php";
include $ruta."/model/modulo_producto/cl_productos.php"; 
$usuarios=new Registros();
$id=$_POST["id"];
$Datos=$usuarios->Borrar($id);
?>