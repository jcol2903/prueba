<div class="col-lg-12 mb-4">
  <div class="card">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-success">Cierres por sorteo</h6>
    </div>
    <?php 
      include"../../config.php";
      $ruta="C:/xampp/htdocs/lotto_activo".$url;
      //$ruta=$_SERVER['DOCUMENT_ROOT'].$url;
      include $ruta."/model/modulo_cierres/cl_cierres.php"; 
      $usuarios=new Registros();
      include "fecha.php"; 
    ?>
    <div class="table-responsive">
      <h5 class="ml-2 mt-2 text-success">Listado de Apuestas</h5>
      <table class="table align-items-center table-flush">
        <thead class="thead-light">
          <tr>               
            <th>Id Apuesta</th>         
            <th>Nombre Vendedor</th> 
            <th>Fecha y Hora Sorteo</th>
            <th>Animal</th>
            <th>Valor Apuesta</th>
          </tr>
        </thead>
        <tbody>
          <?php include"../../controller/mdl_cierres/lista_apuestas.php" ?>
        </tbody>
      </table>
    </div>
    <div class="table-responsive">
      <h5 class="ml-2 mt-2 text-success">Listado de Ganadores</h5>
      <table class="table align-items-center table-flush">
        <thead class="thead-light">
          <tr>               
            <th>Id Apuesta</th>              
            <th>Nombre Vendedor</th> 
            <th>Fecha y Hora Sorteo</th>
            <th>Resultado</th>
            <th>Valor Apuesta</th>
            <th>Valor Ganado</th>
          </tr>
        </thead>
        <tbody>
          <?php include"../../controller/mdl_cierres/lista_ganadores.php" ?>
        </tbody>
      </table>
    </div>
  </div>
</div>