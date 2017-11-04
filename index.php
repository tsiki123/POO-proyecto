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
<body>
		<div class="container">
				<center><h1> <strong> <img src="imagenes/coop2.jpg" style="width:300px"> </strong> </h1></center>
				<center><h1> <strong></strong> </h1></center>
				
				<center><h5>Inicia sesion para acceder al sistema</h5></center>
				</div>

		<center>
					<div class= "well" id = "div-formulario1"  style="width:400px" style="height: 500px">
						<td colspan="2"><label for="inputEmail" class="sr-only">Usuario</label>
		        		<input type="Correo" id="inputCorreo" class="form-control" placeholder="Usuario" required autofocus></td>
						<br>
						<br>
						<label for="inputPassword" class="sr-only">Contraseña</label>
		        		<input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
		        		<br>
		        		<div id="resultado">
		        			
		        		</div>
		        		<br>
		        		<input type="submit" id="login"  value="Ingresar" class="btn btn-primary btn btn-lg" >

		        		<br>
		        		<a href="nuevaContrasena.php">¿Olvidaste tu contraseña?</a><br>

					</div>
					<a href="indexCreaCuenta.php">Crear Una Cuenta</a><br>
				</center>
	

<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
<script src="js/IniciarSesion.js"></script>
</body>
</html>
