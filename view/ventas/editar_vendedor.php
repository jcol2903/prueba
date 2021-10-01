<?php include"../../controller/mdl_vendedor/vendedor.php"; ?>
<script src="../../js/mdl_vendedor/actualizar.js"></script>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800"><strong>VENDEDOR</strong></h1>
</div>
<div class="d-sm-flex align-items-center justify-content-between ml-4 mb-4">
  <a href="javascript:history.back()" class="btn btn-danger" style="color:white; cursor:pointer;">VOLVER</a>
</div>
<div class=" card col-lg-12">
  <div class=" row">
    <div class="col-lg-6">
      <div class=" mb-4">
        <form onsubmit="return false;" id="formulario">
          <input name="id" hidden value="<?php echo $Info["pkid"] ?>">
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">NÚMERO DOCUMENTO</label>
              <input  type="text" class="form-control" value="<?php echo $Info["numero_doc"] ?>" name="num_doc" aria-describedby="">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">NOMBRE</label>
              <input  type="text" class="form-control" value="<?php echo $Info["nombre"] ?>" name="nombre" aria-describedby="">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">APELLIDO</label>
              <input  type="text" class="form-control" value="<?php echo $Info["apellido"] ?>" name="apellido" aria-describedby="">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">CORREO</label>
              <input  type="text" class="form-control" value="<?php echo $Info["correo"] ?>" name="correo" aria-describedby="">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">CELULAR</label>
              <input  type="text" class="form-control" name="celular" value="<?php echo $Info["celular"] ?>" aria-describedby="">
            </div>
            <hr>
            <div style="display:none" id='cargando' class='alert alert-primary'>
              <i class='fa fa-refresh fa-spin'></i>
              PROCESANDO...
            </div>
            <div id="resp"></div>
            <button id="btn-actualizar"  type="submit" class="btn btn-primary">ACTUALIZAR</button>
          </div>
        </form>
      </div>            
    </div>
  </div>
</div>
<script>
  function mostrar(){
    document.getElementById("resp").innerHTML="";
    document.getElementById("cargando").style.display = "block"; 
  }
</script>