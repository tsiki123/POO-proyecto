<?php
	if(!isset($_SESSION['CODIGO'])){
			header("locate: index.html");

	}
	

?>


<!DOCTYPE html>
<html>
<title>Principal</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link href="css/bootstrap.min.css" rel="stylesheet">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>
<body style="background-image:url(imagenes/background.jpg); background-size:cover; background-attachment: fixed;">

<!-- Navbar -->
<div class="w3-top" >
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large"><img src="imagenes/coop4.jpg" style="width:150px; height:50px; padding: 10px; margin:10px;"></a>
    <a href="#solicitud" class="w3-bar-item w3-button w3-padding-large w3-hide-small" style="width:200px; height:50px; padding: 10px; margin:20px;">BIENVENIDO</a>
    
    
    
   
    
   
    <div class="w3-dropdown-hover w3-hide-small" style="width:180px; height:50px; padding: 10px; margin:10px;">
      <button class="w3-padding-large w3-button" title="More"> PRESTAMOS  <i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="solicitudPrestamo.php" class="w3-bar-item w3-button">Solicitar Prestamo</a>
        <a href="#verSolicitud" class="w3-bar-item w3-button">Ver solicitudes de Prestamos</a>

        
      </div>
    </div>
    

    <div>
      <a href="index.html"  > <input type="submit" class="btn btn-primary btn btn-lg" value="Salir " style="width:110px; height:40px; padding: 10px; margin:20px;"></a>
    </div>

    
  </div>
</div>





  
  


  

<div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="verSolicitud">
	<form>
            <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <table   class="formulario" style="width: 600px" style="height: 200" style="margin: 10px">
			                  <tr>

			                    
			                    <td  >
									
									<label >datos del solicitante de prestamo:</label>
									
									<label >Nombre de usuario :</label>
									
			                    	<input type="text" onclick="pop();" name="nombre" data-html="true" class="form-control" placeholder="Nombre" data-toggle="popover" data-content="-usa [2-12] caracteres <br>-solo usa letras" data-container="body" data-placement="left">
			                    </td>
			                    <td >
								<label for="Apellido">apellido :</label>
			                    <span>id="apellido" type="text" onclick="pop();" name="apellido" data-html="true" class="form-control" placeholder="apellido" data-toggle="popover" data-content="-Usa [2-12] caracteres <br>-Solo usa letras" data-container="body" data-placement="top" >
								</td>
							  </tr>
						
			                  
			                  
			                 
			                  


			                    
			                   
			                    <br>
			                   
              </table>
              </div>
               <div class="col-md-6">
				   
              
              </div>
            </div>
          </div>
       <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                
              </div>
               <div class="col-md-6">
                <tr>

			                    
			                    <td  >
									
									<label >datos delprestamo:</label>
									
									<label >codigo de solicitud:</label>
									
			                    	<input type="text" onclick="pop();" name="codPrestamo" data-html="true" class="form-control" placeholder="Nombre" data-toggle="popover" data-content="-usa [2-12] caracteres <br>-solo usa letras" data-container="body" data-placement="left">
			                    </td>
			                    <td >
								<label for="monto">monto del prestamo :</label>
			                    <input id="monto" type="text" onclick="pop();" name="monto" data-html="true" class="form-control" placeholder="apellido" data-toggle="popover" data-content="-Usa [2-12] caracteres <br>-Solo usa letras" data-container="body" data-placement="top" >
								</td>
							  </tr>
              </div>
            </div>
          </div>
          
          
          <a class="btn btn-primary " href="inicioSesion.php">Enviar Solicitud</a>
          <a class="btn btn-primary " href="inicioSesion.ohp">Cancelar</a>
        </form>
    
  </div>






 

  <!-- Ticket Modal -->
  <div id="solicitud" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4">
      <header class="w3-container w3-teal w3-center w3-padding-32"> 
        <span onclick="document.getElementById('solicitud').style.display='none'" 
       class="w3-button w3-teal w3-xlarge w3-display-topright">&times;</span>
        <h2 class="w3-wide"><i class="fa fa-suitcase w3-margin-right"></i>Tickets</h2>
      </header>
      <div class="w3-container">
        <p><label><i class="fa fa-shopping-cart"></i> Tickets, $15 per person</label></p>
        <input class="w3-input w3-border" type="text" placeholder="How many?">
        <p><label><i class="fa fa-user"></i> Send To</label></p>
        <input class="w3-input w3-border" type="text" placeholder="Enter email">
        <button class="w3-button w3-block w3-teal w3-padding-16 w3-section w3-right">PAY <i class="fa fa-check"></i></button>
        <button class="w3-button w3-red w3-section" onclick="document.getElementById('solicitud').style.display='none'">Close <i class="fa fa-remove"></i></button>
        <p class="w3-right">Need <a href="#" class="w3-text-blue">help?</a></p>
      </div>
    </div>
  </div>

 <div class="modal fade" tabindex="-1" role="dialog" id="modal-condiciones">
              
              <div class="modal-dialog" role="document"  style="width:900px" style="height: 800px" >
                <div class="modal-content">
                   
                  <div class="modal-body">
                            <?php  
                              include_once("solicitudPrestamo.php");
                            ?>
                      </div>
                       <div class="modal-footer">
                        <center>
                          <td colspan="2">
                            <a href="indexCreaCuenta.php">
                              <input type="submit" name="btn-cancelar" id="cancelar" 
                              value="Cancelar" class="btn btn-warning">
                            </a>
                            <input type="reset" name="btn-acepto" id="acepto" 
                            value="Acepto" class="btn btn-primary">
                            </a>
                          </td>
                        </center>
                      </div> 
                </div><!-- /.modal-content -->
                
              </div><!-- /.modal-dialog --> 
               
          </div><!-- /.modal -->
  
<!-- End Page Content -->
</div>
<!-- Add Google Maps -->

<script>
function myMap() {
  myCenter=new google.maps.LatLng(41.878114, -87.629798);
  var mapOptions= {
    center:myCenter,
    zoom:12, scrollwheel: false, draggable: false,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

  var marker = new google.maps.Marker({
    position: myCenter,
  });
  marker.setMap(map);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-snapchat w3-hover-opacity"></i>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
  <p class="w3-medium">Cooperativa POO <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">Todos los derechos reservados</a></p>
</footer>

<script>

var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 4000);    
}

function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}

var modal = document.getElementById('solicitud');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>
