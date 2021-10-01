    <div class="p-2">
      <h6>Seleccionar sorteo</h6>
      <form class="form-inline">
        <div class="form-group">
          <input type="date" name="fecha" class="form-control">
        </div>
        <div class="form-group mx-sm-3">
          <select class="form-control" name="hora">
            <option value="0">- SELECCIONAR -</option>
              <?php
                $select=$usuarios->Lista_Horas();
                foreach ($select as $p){
              ?>
                <option value="<?php echo $p['id_hora']?>"><?php echo $p['hora_sorteo'] ?></option>
              <?php 
                }
              ?>
          </select>               
        </div>
        <div class="form-group">
          <button class="btn btn-primary">Buscar</button>
        </div>
      </form>
    </div>