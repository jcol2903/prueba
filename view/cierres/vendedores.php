    <div class="p-2">
      <h6>Seleccionar Vendedor</h6>
      <form class="form-inline">
        <div class="form-group">
          <select class="form-control" name="vendedor">
            <option value="0">- SELECCIONAR -</option>
              <?php
                $select=$usuarios->Lista_Vend_SubV();
                foreach ($select as $p){
              ?>
                <option value="<?php echo $p['pkid']?>"><?php echo $p['nombre'] . ' ' . $p['apellido']  . ' - ' . $p['tipo_usuario'] ?></option>
              <?php 
                }
              ?>
          </select>               
        </div>
        <div class="form-group mx-sm-3">
          <button class="btn btn-primary">Buscar</button>
        </div>
      </form>
    </div> 