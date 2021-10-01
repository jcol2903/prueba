$(document).on('ready',function(){

    $('#btn-registrar').click(function(){

        var url = "../../controller/mdl_sorteo/resultado.php";                                            

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