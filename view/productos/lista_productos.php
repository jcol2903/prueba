<script src="../../js/mdl_producto/borrar.js"></script>
<div class="col-lg-12 mb-4">
  <div class="card">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-success">Productos</h6>
      <a href="nuevo_producto.php"><button class="btn btn-success">Nuevo Producto</button></a>
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
            <th>Editar</th>
            <th>Borrar</th>
          </tr>
        </thead>
        <tbody>
          <?php include"../../controller/mdl_producto/lista_productos.php"; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>