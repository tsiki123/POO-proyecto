<!DOCTYPE html>
<html>
<title>Principal</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>
<body style="background-image:url(imagenes/background.jpg); background-size:cover; background-attachment: fixed;">

<!-- Navbar -->
<div class="w3-top" >
  <div class="w3-bar w3-blue w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large"><img src="imagenes/coop4.jpg" style="width:150px; height:50px; padding: 10px; margin:10px;"></a>
    <a href="#band" class="w3-bar-item w3-button w3-padding-large w3-hide-small" style="width:200px; height:50px; padding: 10px; margin:20px;">BIENVENIDO</a>
    
    
    <div class="w3-dropdown-hover w3-hide-small" style="width:180px; height:50px; padding: 10px; margin:10px;">
      <button class="w3-padding-large w3-button" title="More">CUENTAS <i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="crearCuenta.php" class="w3-bar-item w3-button">Afiliarse</a>
        <a href="#prestamos" class="w3-bar-item w3-button">Ver Cuentas </a>
        
      </div>
    </div>
    <div class="w3-dropdown-hover w3-hide-small" style="width:180px; height:50px; padding: 10px; margin:10px;">
      <button class="w3-padding-large w3-button" title="More">PRESTAMOS  <i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="#" class="w3-bar-item w3-button">Solicitar Prestamo</a>
        <a href="#" class="w3-bar-item w3-button">Ver solicitudes de Prestamos</a>
        
      </div>
    </div>
    

    <div>
      <a href="index..html"  > <input type="submit" class="btn btn-primary btn btn-lg" value="Salir " style="width:110px; height:40px; padding: 10px; margin:20px;"></a>
    </div>

    
  </div>
</div>





  
  <div class="mySlides w3-display-container w3-center">
    <img src="/w3images/ny.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>Descuentos con nuestras tarjetas</h3>
      <p><b>compra en una gran cantidad de comercios y obten descuentos al instante</b></p>    
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="/w3images/chicago.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>solicita Prestamos al instante</h3>
      <p><b>solicita un prestamo automatico ay te lo aprobamos al instante</b></p>    
    </div>
  </div>

  
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
  <br>
  <br>
  <br>
    <h2 class="w3-wide">Cooperativa POO</h2>
    <p class="w3-opacity"><i>Servicios Financieros al alcance de Todos</i></p>
    <h3><p class="w3-justify">Somos una entidad financiera con alcance a nivel nacional, enfocados en ofrecer los mejores servicios de ahorro y credito en el pais.
    <p>
      MISIÓN
      <br>
      Somos una cooperativa de ahorro y crédito con la mision de brindarte los mejores servicios financieros, innovando cada dia nuestros servicios y poniendolos al alcance de todos.
    </p>
    <p>
      VISIÓN
      <br>
      Ser una cooperativa solida y lider en servicios de ahorro y credito, brindando una mejor calidad en la prestacion de nuestros servicios a todos nuestros afiliados.
    </p>

    </p>
    </h3>
    
  </div>

  <!-- The Tour Section -->
  <div class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge"  id="beneficios">
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
      <h2 class="w3-wide w3-center" style="color:#000000;">BENEFICIOS</h2>
      <p class="w3-opacity w3-center" style="color:#000000;"><i>Con nosotros siempre obtienes mas!</i></p><br>

      <ul class="w3-ul w3-border w3-white w3-text-grey">
        <li style="color:#000000;">Descuentos:  <span >Realiza compras con nuestras tarjetas</span></li>
        <li style="color:#000000;">Libera Cuota:  <span >si pagas puntual podemos eximirte de pagar una de tus cuotas en prestamos</span></li>
        <li style="color:#000000;">Seguros:  <span >  si eres un antiguo afiliado puedes optar a asegurarte con un beneficio extra</span></li>
      </ul>

      
    </div>
  </div>



  <div class="w3-row-padding w3-padding-32" id="cuentas" style="margin:10px;">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <center><h3>Tipos de Cuentas de Ahorro</h3></center>
        <br>
        <br>
        <br>
        
        <div class="w3-third w3-margin-bottom" >
          
          <div class="w3-container w3-white" >
            <p><b>Cuenta Joven</b></p>
            
            <p>este es un tipo de cuenta que pueden aperturar jovenes que quieren comenzar el habito del ahorro a temprana edad</p>
            
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          
          <div class="w3-container w3-white">
            <p><b>Cuenta ahorro navideño</b></p>
            
            <p>Esta es un tipo de cuenta en la cual solo se pueden realizar retiros en el mes de diciembre.</p>
            
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          
          <div class="w3-container w3-white">
            <p><b>Cuenta Ahorro Retirable</b></p>
            
            <p>Este es el tipo de cuenta que mayores beneficios otorga, ya que es retirable en cualquier momento.</p>
            
          </div>
        </div>
      </div>




      <div class="w3-row-padding w3-padding-32" id="prestamos" style="margin:10px;">
      <br>
      <br>
      <br>
        
        <center><h3>Tipos de Prestamos</h3></center>
        <br>
        <br>
        <br>
        
        <div class="w3-third w3-margin-bottom" >
          
          <div class="w3-container w3-black" >
          <img src="imagenes/automatico.jpg"  style="width:80%" class="w3-hover-opacity">
            
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          
          <div class="w3-container w3-black">
            <img src="imagenes/hipotecario.jpg"  style="width:80%" class="w3-hover-opacity">
            
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          
          <div class="w3-container w3-black">
            <img src="imagenes/fiduciario.jpg"  style="width:80%" class="w3-hover-opacity">
            
          </div>
        </div>
      </div>

  <!-- Ticket Modal -->
  <div id="ticketModal" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4">
      <header class="w3-container w3-teal w3-center w3-padding-32"> 
        <span onclick="document.getElementById('ticketModal').style.display='none'" 
       class="w3-button w3-teal w3-xlarge w3-display-topright">&times;</span>
        <h2 class="w3-wide"><i class="fa fa-suitcase w3-margin-right"></i>Tickets</h2>
      </header>
      <div class="w3-container">
        <p><label><i class="fa fa-shopping-cart"></i> Tickets, $15 per person</label></p>
        <input class="w3-input w3-border" type="text" placeholder="How many?">
        <p><label><i class="fa fa-user"></i> Send To</label></p>
        <input class="w3-input w3-border" type="text" placeholder="Enter email">
        <button class="w3-button w3-block w3-teal w3-padding-16 w3-section w3-right">PAY <i class="fa fa-check"></i></button>
        <button class="w3-button w3-red w3-section" onclick="document.getElementById('ticketModal').style.display='none'">Close <i class="fa fa-remove"></i></button>
        <p class="w3-right">Need <a href="#" class="w3-text-blue">help?</a></p>
      </div>
    </div>
  </div>

  <!-- The Contact Section -->
  <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
  <br>
  <br>
  <br>
  <br>
    <h2 class="w3-wide w3-center">CONTACTO</h2>
    <p class="w3-opacity w3-center"><i>Deja un mensaje</i></p>
    <div class="w3-row w3-padding-32">
      <div class="w3-col m6 w3-large w3-margin-bottom">
        <i class="fa fa-map-marker" style="width:30px"></i> Honduras, hn<br>
        <i class="fa fa-phone" style="width:30px"></i> Telefono: +504 25897452<br>
        <i class="fa fa-envelope" style="width:30px"> </i> Email: mail@mail.com<br>
      </div>
      <div class="w3-col m6">
        <form action="/action_page.php" target="_blank">
          <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Nombre" required name="Name">
            </div>
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Correo" required name="Email">
            </div>
          </div>
          <input class="w3-input w3-border" type="text" placeholder="Mensaje" required name="Message">
          <button class="w3-button w3-black w3-section w3-right" type="submit">ENVIAR</button>
        </form>
      </div>
    </div>
  </div>
  
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

var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>
