$(document).on('ready',function(){

    $('#btn-registrar').click(function(){

        var url = "../../controller/mdl_vendedor/registro_sub.php";                                            

        $.ajax({

         type: "POST",                 

         url: url,                    

         data: $("#formulario").serialize(),

         success: function(data)            

         {

           $('#resp').html(data);           

         }

         });

      });      

      });