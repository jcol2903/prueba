<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="../../icono.png" rel="icon">
  <title>Ingresar</title>
  <link href="../../comp/src/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="../../comp/src/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="../../comp/src/css/ruang-admin.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="../../js/jquery-1.11.2.min.js"></script>
  <script src="../../js/mdl_login/login.js"></script>
</head>
<body class="bg-gradient-login">
  <img src="../../comp/img/fondo.jpg" style="position: absolute;width: 100%;height: 100%;">
  <div class="d-flex justify-content-center">
    <div class="card" style="width: 30%; margin-top: 7%;margin-left: 47%;">
      <div class="card-body text-center">
        <div class="text-center">
          <img src="../../comp/img/logo1.png" style="width:80%;">
        </div>
        <hr>
        <form onsubmit="return false;" id="formulario">
          <div class="form-group">
            <label>Correo</label>
            <input type="text" class="form-control" name="correo" placeholder="">
          </div>                 
          <div class="form-group">
            <label>Clave</label>
            <input type="password" class="form-control" name="clave" aria-describedby="">                     
          </div>
          <div style="display:none" id='cargando' class='alert alert-primary'>
            <i class='fa fa-refresh fa-spin'></i>
            PROCESANDO...
          </div>
          <div class="form-group" id="resp"></div>            
          <div class="form-group">
            <button onclick="mostrar()" id="btn-ingresar" type="submit" class="btn btn-primary btn-block">Ingresar</button>
          </div>
          <hr>
        </form>
      </div>
    </div>
  </div>
  <script>
    function mostrar(){
      document.getElementById("resp").innerHTML="";
      document.getElementById("cargando").style.display = "block"; 
    }
  </script>
  <script src="../../comp/src/vendor/jquery/jquery.min.js"></script>
  <script src="../../comp/src/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../comp/src/vendor/jquery-easing/jquery.easing.min.js"></script>
</body>
</html>