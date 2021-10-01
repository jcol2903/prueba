<script src="../../js/mdl_producto/registro.js"></script>
<div class="col-lg-12 mb-4">
  <div class="card">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
	  <h6 class="m-0 font-weight-bold text-success">Nuevo Producto</h6>
	</div>
<div class="d-sm-flex justify-content-between ml-4 mb-4">
  <a href="productos.php" class="btn btn-danger" style="color:white; cursor:pointer;">Lista Productos</a>
</div>
<div class=" card col-lg-12">
  <div class=" row">
    <div class="col-lg-6">
      <div class=" mb-4">
        <form id="formulario" enctype="multipart/form-data">
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Nombre producto *</label>
              <input type="text" class="form-control" name="nombre" aria-describedby="" required>             
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Descripcion producto *</label>
              <textarea class="form-control" name="descripcion" aria-describedby="" required></textarea>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Valor producto *</label>
              <input type="text" class="form-control" name="valor" aria-describedby="" required>                 
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Tienda *</label>
              <select class="form-control" name="tienda"required>
                <option value="0">- SELECCIONAR -</option>
                <?php 
          					include"../../config.php";
                    $conexion=new mysqli($host, $user, $pass, $db);
          					$ruta="C:/xampp/htdocs/prueba/php";
          					include $ruta."/model/modulo_producto/cl_productos.php"; 
                  	$usuarios=new Registros();
                  	$select=$usuarios->Lista_Tiendas($id);
                  	foreach ($select as $p){
                ?>
                  <option value="<?php echo $p['id']?>"><?php echo $p['nombre']?></option>
                <?php }?>
              </select>               
            </div>
            <hr>
            <div style="display:none" id='cargando' class='alert alert-primary'>
              <i class='fa fa-refresh fa-spin'></i>
              PROCESANDO...  
            </div>
            <div id="resp"></div>
            <button id="btn-registrar" type="submit" class="btn btn-success">REGISTRAR </button>
          </div>
            </div>
          </div>
          <div class="col-lg-6 pt-3">
              <div class="form-group">
              <label for="exampleInputEmail1">Imagen producto *</label>
              <input type="file" class="form-control" name="imagen" aria-describedby="" required>                
            </div>
        </div>
      </div>
    </form>
</div>