function EliminarCliente(elemento) {

    var elemento=elemento;

    var r = confirm("¿Real mente desea eliminar a este cliente?");

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

          url: "../../controller/mdl_cliente/borrar.php",

          data: {id:id},

          success: function( respuesta ){                       

             window.location.reload(true);

  

       }});

  

  }

  

  