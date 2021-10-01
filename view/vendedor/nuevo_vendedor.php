<script src="../../js/mdl_vendedor/registro.js"></script>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h3 class="mb-0 text-gray-800"><strong>NUEVO VENDEDOR</strong></h3>
</div>
<div class="d-sm-flex justify-content-between ml-4 mb-4">
  <a href="lista.php" class="btn btn-danger" style="color:white; cursor:pointer;">LISTA VENDEDORES</a>
</div>
<div class=" card col-lg-12">
  <div class=" row">
    <div class="col-lg-6">
      <div class=" mb-4">
        <form onsubmit="return false;" id="formulario">
          <input name="id" hidden value="<?php echo $_SESSION["id_usuario"] ?>">
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">NUMERO DOCUMENTO *</label>
              <input type="text" class="form-control" name="num_doc" aria-describedby="" >                 
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">NOMBRE *</label>
              <input type="text" class="form-control" name="nombre" aria-describedby="" >                 
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">APELLIDO *</label>
              <input type="text" class="form-control" name="apellido" aria-describedby="" >                 
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">CORREO *</label>
              <input type="text" class="form-control" name="correo" aria-describedby="" >                    
            </div>                          
            <div class="form-group">
              <label for="exampleInputEmail1">CELULAR </label>
              <input type="text" class="form-control" name="celular" aria-describedby="" >
            </div> 
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

