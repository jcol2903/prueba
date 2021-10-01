<script src="../../js/mdl_cliente/borrar.js"></script>
<div class="col-lg-12 mb-4">
  <div class="card">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-success">Vendedores</h6>
      <a href="nuevo_vendedor.php" class="btn btn-success" style="color:white; cursor:pointer;">NUEVO</a>
    </div>
    <div class="table-responsive">
      <table class="table align-items-center table-flush">
        <thead class="thead-light">
          <tr>
            <th></th>                  
            <th>Nombre Vendedor</th>
            <th>Correo</th>
            <th>Celular</th>                 
          </tr>
        </thead>
        <tbody>
          <?php include"../../controller/mdl_vendedor/lista_vendedores.php" ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

          