$("#find").click(function(){
     var algo= $("#buscaPrestamo").val();
    var url="codigo="+algo;
    $.ajax({
        data: url,
        url: "buscarprest.php",
        type: "post",
        success: function(dato){
           $("#set").html(dato);
        }

    });

});

