<?php

?>
<!DOCTYPE html>
<html lang="en">
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
    
    <title>Cooperativa POO</title>
</head>
<body style="background-image:url(imagenes/background.jpg); background-size:cover; background-attachment: fixed;">

<div class="container">
				<br>
				<br>
				<center><h1> <strong> <img src="imagenes/coop4.jpg" style="width:200px; height: 100px;"> </strong> </h1></center>
				<center><h1> <strong></strong> </h1></center>
				
				<center><h5>Solicitud De Prestamo</h5></center>
		</div>
	<div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Solicitud de Prestamo</div>
      <div class="card-body">
        <form>
        	



        
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputName">Monto de prestamo a solicitar</label>
              </div>
               <div class="col-md-6">
                <input class="form-control" id="exampleInputName" type="number" value="1" min="1" max ="100" aria-describedby="nameHelp" placeholder="Primer Nombre">
              </div>
            </div>
          </div>
       <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputName">Cantidad de cuotas de pago</label>
              </div>
               <div class="col-md-6">
                <input class="form-control" id="exampleInputName" type="number" value="2" min="2" max ="48" aria-describedby="nameHelp" placeholder="Primer Nombre">
              </div>
            </div>
          </div>
          
          
          <a class="btn btn-primary " href="inicioSesion.php">Enviar Solicitud</a>
          <a class="btn btn-primary " href="inicioSesion.ohp">Cancelar</a>
        </form>
        <div class="text-center">
         El gerente de prestamo se encargara de aprobar o denegar la solicitud de prestamo
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
