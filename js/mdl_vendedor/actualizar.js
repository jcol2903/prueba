$(document).on('ready',function(){
   
    $('#btn-actualizar').click(function(){
        var url = "../../controller/mdl_vendedor/actualizar.php";                                            
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