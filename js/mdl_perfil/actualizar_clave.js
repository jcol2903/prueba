$(document).on('ready',function(){
   
    $('#btn-actualizar_clave').click(function(){
        var url = "../../controller/mdl_perfil/actualizar_clave.php";                                            
        $.ajax({                        
         type: "POST",                 
         url: url,                    
         data: $("#formulario2").serialize(),
         success: function(data)            
         {
           $('#resp2').html(data);           
         }
         });
      });      
      });