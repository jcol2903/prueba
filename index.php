<?php 
	include 'comp/header.php';
?>
<div class="col-lg-12 mb-4">
  <div class="card">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-success">Productos</h6>
      <a href="producto.php"><button class="btn btn-success">Nuevo Producto</button></a>
    </div>
    <div class="table-responsive">
      <table class="table align-items-center table-flush">
        <thead class="thead-light">
          <tr>               
            <th>SKU</th> 
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Valor</th>
            <th>Tienda</th>
            <th>Imagen</th>
          </tr>
        </thead>
        <tbody>
          <?php include"controller/mdl_producto/lista_productos.php"; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
  <script src="comp/src/vendor/jquery/jquery.min.js"></script>
  <script src="comp/src/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="comp/src/vendor/jquery-easing/jquery.easing.min.js"></script>
</body>
</html>