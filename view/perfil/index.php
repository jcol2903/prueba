<?php 

include"../../config.php";

$ruta="C:/xampp/htdocs/lotto_activo".$url;
//$ruta=$_SERVER['DOCUMENT_ROOT'].$url;

include $ruta."/controller/mdl_perfil/perfil.php"; 

?>

<script src="../../js/mdl_perfil/actualizar.js"></script>

<script src="../../js/mdl_perfil/actualizar_clave.js"></script>

<div class="col-lg-6">

              <!-- Form Basic -->

              <div class="card mb-4">

                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">

                  <h6 class="m-0 font-weight-bold text-primary">Datos Personales</h6>

                </div>

                <div class="card-body">

                  <form onsubmit="return false;" id="formulario">

                  <input name="id" hidden value="<?php echo $_SESSION["id_usuario"] ?>">

                  <div class="form-group">

                      <label for="exampleInputEmail1">Correo </label>

                      <input type="text" disabled class="form-control" id="correo" value="<?php echo $Info["correo"] ?>" aria-describedby="emailHelp"                       >

                     </div>

                    <div class="form-group">

                      <label for="exampleInputEmail1">Nombre </label>

                      <input style="text-transform:uppercase;" type="text" class="form-control" value="<?php echo $Info["nombre"] ?>" name="nombre" aria-describedby="">

                     </div>

                     <div class="form-group">

                      <label for="exampleInputEmail1">Apellido </label>

                      <input style="text-transform:uppercase;" type="text" class="form-control" value="<?php echo $Info["apellido"] ?>" name="apellido" aria-describedby="" >

                     </div>

                     <div class="form-group">

                      <label for="exampleInputEmail1">Telefono  </label>

                      <input type="text" value="<?php echo $Info["celular"] ?>" name="telefono"  class="form-control" id="exampleInputEmail1" aria-describedby="" >

                     </div>

                     <div style="display:none" id='cargando' class='alert alert-primary'>

                                    <i class='fa fa-refresh fa-spin'></i>

                                    PROCESANDO...  </div>

                    <div id="resp"></div>

                   

                    <button onclick="mostrar()" id="btn-actualizar" type="submit" class="btn btn-primary">ACTUALIZAR</button>

                  </form>

                </div>

              </div>

</div>

<script>

   function mostrar(){

    document.getElementById("resp").innerHTML="";

        document.getElementById("cargando").style.display = "block"; 

        

    }  

    function mostrar2(){

    document.getElementById("resp2").innerHTML="";

        document.getElementById("cargando2").style.display = "block"; 

        

    }  

    </script>

<div class="col-lg-6">

              <!-- Form Basic -->

              <div class="card mb-4">

                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">

                  <h6 class="m-0 font-weight-bold text-primary">Seguridad</h6>

                </div><form onsubmit="return false;" id="formulario2">

                <input name="id2" hidden value="<?php echo $_SESSION["id_usuario"] ?>">

                <div class="card-body">

                  <form>

                    <div class="form-group">

                      <label for="exampleInputEmail1">Actualizar Clave de Ingreso</label>

                      <input type="password" class="form-control" name="clave2" aria-describedby=""

                        >                    

                    </div>

                    <div style="display:none" id='cargando2' class='alert alert-primary'>

                                    <i class='fa fa-refresh fa-spin'></i>

                                    PROCESANDO...  </div>

                    <div id="resp2"></div>

                    <button id="btn-actualizar_clave" onclick="mostrar2()" type="submit" class="btn btn-primary">ACTUALIZAR</button>

                  </form>

                </div>

              </div>

</div>



             