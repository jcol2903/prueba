<script src="../../js/mdl_cliente/borrar.js"></script>
<div class="col-lg-12 mb-4">
  <div class="card">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-success">Sorteos con ANIMALITO ganador</h6>
      <a href="nuevo_sorteo.php" class="btn btn-success" style="color:white; cursor:pointer;">NUEVO</a>
    </div>
    <div class="table-responsive">
      <table class="table align-items-center table-flush">
        <thead class="thead-light">
          <tr>             
            <th>Fecha Sorteo</th>
            <th>Hora Sorteo</th>
            <th>Resultado</th>                 
          </tr>
        </thead>
        <tbody>
          <?php include"../../controller/mdl_sorteo/lista_sorteo.php" ?>
        </tbody>
      </table>
    </div>
  </div>
</div>