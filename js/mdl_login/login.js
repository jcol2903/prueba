$(document).on('ready',function(){
    $('#btn-ingresar').click(function(){
        var url = "../../controller/mdl_login/login.php";
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