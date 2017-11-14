<?php

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">

    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="icon" href="img/logo.ico" type="image/x-icon">
	<style >
		
		#div-formulario1{
			
			padding:80px; 
			

			border:1px #1187ba solid; 
		}

		#div-formulario{
			background-color: rgba(74, 16, 5,0.9); 
			margin: 100px;
			padding:50px; 
			border:1px #922713 solid;

		}

		
	</style>
    
    <title>ver solicitudes</title>
</head>
<body style="background-image:url(imagenes/background.jpg); background-size:cover; background-attachment: fixed;">

<div class="container">
				<br>
				<br>
				<center><h1> <strong> <img src="imagenes/coop4.jpg" style="width:200px; height: 100px;"> </strong> </h1></center>
				<center><h1> <strong></strong> </h1></center>
				
				<center><h5>Solicitudes de prestamos</h5></center>
		</div>
	<div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Solicitud de Prestamo</div>
      <div class="card-body">
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
			                    <span>nombre</span>id="apellido" type="text" onclick="pop();" name="apellido" data-html="true" class="form-control" placeholder="apellido" data-toggle="popover" data-content="-Usa [2-12] caracteres <br>-Solo usa letras" data-container="body" data-placement="top" >
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
        <div class="text-center">
         la solicitud sera aprobada
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
<script src="js/IniciarSesion.js"></script>
</body>
</html>
