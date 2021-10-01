<script src="../../js/mdl_cliente/borrar.js"></script>
<div class="col-lg-12 mb-4">
  <div class="card">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-success">Sub-Vendedores - <?php echo base64_decode($_GET['ven']) ?></h6>
      <a href="nuevo_subvendedor.php?id=<?php echo $_GET['id'] ?>" class="btn btn-success" style="color:white; cursor:pointer;">NUEVO</a>
      <?php 
        if ($_SESSION['tipo_usuario'] == 1) {
          echo "<a href='javascript:history.back()' class='btn btn-danger' style='color:white; cursor:pointer;'>VOLVER</a>";
        }
      ?>
    </div>
    <div class="table-responsive">
      <table class="table align-items-center table-flush">
        <thead class="thead-light">
          <tr>
            <th></th>
            <th>Nombre Sub-Vendedor</th>
            <th>Correo</th>
            <th>Celular</th>                 
          </tr>
        </thead>
        <tbody>
          <?php include"../../controller/mdl_vendedor/lista_subvendedor.php" ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

          