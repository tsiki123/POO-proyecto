$("#usuarios").click(function(){
    $("#home").addClass("active");
    $("#menu1").removeClass("active");
    $("#menu2").removeClass("active");

    
    $("#prestamo").removeClass("active");
    $("#usuarios").addClass("active");

});
$("#prestamo").click(function(){
    $("#menu1").addClass("active");
    $("#home").removeClass("active");
    $("#menu2").removeClass("active");

    $("#usuarios").removeClass("active");
    $("#prestamo").addClass("active");
   // $("#usuarios").addClass("active");
});
/*
$("#usuarios").click(function(){
    $("#home").addClass("active");
    $("#menu1").removeClass("active");
    $("#menu2").removeClass("active");
});*/