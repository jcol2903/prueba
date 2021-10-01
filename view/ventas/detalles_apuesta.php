<div class="col-lg-12 mb-4">
  <div class="card">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-success">Detalles</h6>
      <a href="javascript:history.back()" class="btn btn-danger">Volver</a>
    </div>
    <div class="table-responsive">
      <table class="table align-items-center table-flush">
        <thead class="thead-light">
          <tr>               
            <th>Fecha y Hora Apuesta</th>
            <th>Numero - Animal</th> 
            <th>Valor Apuesta</th>
          </tr>
        </thead>
        <tbody>
          <?php include"../../controller/mdl_ventas/detalles.php" ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

          