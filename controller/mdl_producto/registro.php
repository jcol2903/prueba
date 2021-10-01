<?php
include"../../config.php";
$ruta="C:/xampp/htdocs/prueba/php";
include $ruta."/model/modulo_producto/cl_productos.php"; 

$procedimientos= new Registros();
$nombre =$_POST['nombre'];
$descripcion =$_POST['descripcion'];
$valor =$_POST['valor'];
$tienda =$_POST['tienda'];
$imagen= $_FILES['imagen']['name'];
$res = $procedimientos->Reg_Producto($nombre,$descripcion,$valor,$tienda,$imagen);
  if($res){
    $direccion="../../comp/img/";
    move_uploaded_file($imagen, $direccion);
    echo " <script> document.getElementById('cargando').style.display = 'none';    </script>";
    $message= "<strong> REGISTRO EXITOSO </strong>";
    $class="alert alert-success";
    echo " <div class=' $class'>
    $message  </div>";
    //echo " <script type='text/javascript'>window.location='productos.php'; </script>  ";
  }else{ 
    echo " <script>   document.getElementById('cargando').style.display = 'none';    </script>";
    $message= "<strong> OCURRIO UN ERROR </strong>";
    $class="alert alert-danger";
    echo " <div class='$class'> $message </div>";  
  }

?>