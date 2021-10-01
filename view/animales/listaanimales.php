<script src="../../js/mdl_cliente/borrar.js"></script>
<div class="col-lg-12 mb-4">
  <div class="card">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-success">Animales</h6>
    </div>
    <div class="table-responsive">
      <table class="table align-items-center table-flush">
        <thead class="thead-light">
          <tr>               
            <th>Número</th> 
            <th>Animal</th>
            <th>Imagen</th>
          </tr>
        </thead>
        <tbody>
          <?php include"../../controller/mdl_animales/lista_animales.php" ?>
        </tbody>
      </table>
    </div>
  </div>
</div>