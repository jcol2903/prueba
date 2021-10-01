<?php

include"config.php";
$ruta="C:/xampp/htdocs/prueba/php";
include $ruta."/db/conexion.php"; 

$procedimientos= new Registros();

$fecha =$_POST['fecha'];

$res = $procedimientos->Reg_Sorteo($fecha);

  if($res){


    echo " <script>   document.getElementById('cargando').style.display = 'none';    </script>";

    $message= "<strong> REGISTRO EXITOSO </strong>";

    $class="alert alert-success";

    echo " <div class=' $class'>

    $message  </div>";
    
    echo " <script type='text/javascript'>window.location='../Sorteo/lista.php'; </script>  ";

    }else

    { echo " <script>   document.getElementById('cargando').style.display = 'none';    </script>";

        $message= "<strong> OCURRIO UN ERROR $res </strong>";

    $class="alert alert-danger";

    echo " <div class=' $class'>

    $message  </div>";  

  }

?>