<?php 
include"config.php";
$ruta="C:/xampp/htdocs/prueba/php";
include $ruta."/model/modulo_producto/cl_productos.php"; 
$usuarios=new Registros();
$lista=$usuarios->Lista_Productos();

foreach($lista as $item){
?>
  <tr>
    <td><?php echo $item["sku"]?></td>
    <td><?php echo $item["producto"]?></td>
    <td><?php echo $item["descripcion"]?></td>
    <td><?php echo $item["valor"]?></td>
    <td><?php echo $item["tienda"]?></td>
    <td><img src="comp/img/<?php echo $item["imagen"] ?>" width="50"></td>
  </tr>  
<?php 
  }
?>