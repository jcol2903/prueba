<script src="../../js/mdl_sorteo/registro.js"></script>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h3 class="mb-0 text-gray-800"><strong>NUEVO SORTEO</strong></h3>
</div>
<div class="d-sm-flex justify-content-between ml-4 mb-4">
  <a href="lista.php" class="btn btn-danger" style="color:white; cursor:pointer;">LISTA SORTEOS</a>
</div>
<div class=" card col-lg-12">
  <div class=" row">
    <div class="col-lg-6">
      <div class=" mb-4">
        <form onsubmit="return false;" id="formulario">
          <input name="id" hidden value="<?php echo $_SESSION["id_usuario"] ?>">
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">FECHA *</label>
              <input type="date" class="form-control" name="fecha" aria-describedby="" >                 
            </div>
            <!--
            <div class="form-group">
              <label for="exampleInputEmail1">HORA *</label>
              <select class="form-control" name="hora">
                <option value="0">- SELECCIONAR -</option>
                <?php 
                  include"../../config.php";
                  $conexion=new mysqli($host, $user, $pass, $db);
                  $ruta="C:/xampp/htdocs/lotto_activo".$url;
                  //$ruta=$_SERVER['DOCUMENT_ROOT'].$url;
                  include $ruta."/model/modulo_sorteo/cl_sorteo.php"; 
                  $usuarios=new Registros();
                  $select=$usuarios->Lista_Horas($id);
                  foreach ($select as $p){
                ?>
                  <option value="<?php echo $p['id_hora']?>"><?php echo $p['hora_sorteo']?></option>
                <?php }?>
              </select>               
            </div>
            -->
            <hr>
            <div style="display:none" id='cargando' class='alert alert-primary'>
              <i class='fa fa-refresh fa-spin'></i>
              PROCESANDO...  
            </div>
            <div id="resp"></div>
            <button id="btn-registrar" type="submit" class="btn btn-success">REGISTRAR </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  function mostrar(){
    document.getElementById("resp").innerHTML="";
    document.getElementById("cargando").style.display = "block"; 
  }
</script>

