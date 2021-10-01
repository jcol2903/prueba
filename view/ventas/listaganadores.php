<div class="col-lg-12 mb-4">
  <div class="card">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-success">Apuestas Ganadas</h6>
    </div>
    <div class="p-2">
      <h6>Buscar por fecha de sorteo</h6>
      <form class="form-inline">
        <div class="form-group">
          <input type="date" name="fecha" class="form-control">
        </div>
        <div class="form-group mx-sm-3">
          <button class="btn btn-primary">Buscar</button>
        </div>
      </form>
    </div>
    <div class="table-responsive">
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
          <?php include"../../controller/mdl_ventas/lista_ganadores.php" ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

          