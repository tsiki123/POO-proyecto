$("#boton").click(function(){
    var nombre=$("#nombre").val();
    var correo=$("#correo").val();
    var mensaje=$("#mensaje").val();
    var url = "nombre="+nombre+"&"+"correo="+correo+"&"+"mensaje="+mensaje;
    $.ajax({
        data:  url,
        url: "mensaje.php",
        type: "post",
        success: function(respuesta){
            $("#respuesta").html(respuesta);
            $("#nombre").val(" ");
            $("#correo").val(" ");
            $("#mensaje").val(" ");

        },
        
    });


});