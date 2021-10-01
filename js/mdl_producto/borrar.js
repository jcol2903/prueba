function Borrar(elemento) {
    var elemento=elemento;
    var r = confirm("¿Real mente desea eliminar a este producto?");
    if (r == true) {
      ConfirmacionBorrar(elemento);
    } else {
    }
  }
  function ConfirmacionBorrar(elemento)
  {
      var id = elemento;
      $.ajax({
          type: "POST",
          url: "../../controller/mdl_producto/borrar.php",
          data: {id:id},
          success: function( respuesta ){       
             window.location.reload(true);
  
       }});
  
  }
  
  