$(document).on('ready',function(){
    $('#btn-actualizar').click(function(){
        var url = "../../controller/mdl_perfil/actualizar.php";                                            
        $.ajax({                        
            type: "POST",                 
            url: url,                    
            data: $("#formulario").serialize(),
            success: function(data){
                $('#resp').html(data);           
            }
        });
    });      
});