<?php
	//phpInfo();
	include_once('logout.php');
	$sentencia=$db->prepare('SELECT * FROM tipo');
	$sentencia->execucte();
/*
	$conn= new conexion();
	$conn->getDb()->prepare('SELECT * FROM tipo');
	$conn->excute();
*/	
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
    
    <title>Cooperativa POO</title>
</head>
<body>
		<div class="container">
				<center><h1> <strong> <img src="imagenes/coop2.jpg" style="width:300px"> </strong> </h1></center>
				<center><h1> <strong></strong> </h1></center>
				
				<center><h5>Inicia sesion para acceder al sistema</h5></center>
				</div>

		<center>
				<form style="width:400px"  class="well" style="height: 500px" action="index.php" method="post">
					<div>
						<input type="email" class="form-control" name="correo" id="correo" placeholder="Correo" require autofocus >
					</div></br></br>
					
					
					<div>
						<input type="password" class="form-control" name="contrasena" id="contrasena" placeholder="contraseña" require>
					</div></br>
					<div>
						<input type="submit" class="btn btn-primary btn btn-lg" value="Ingresar">
					</div>
				</form>

						
		        		<br>
		        		<a href="nuevaContrasena.php">¿Olvidaste tu contraseña?</a><br>

					</div>
					<a href="crearCuenta.php">Crear Una Cuenta</a><br>
			
			
			
					
		</center>
	

			<script src="js/jquery.min.js"></script>
  			<script src="js/bootstrap.min.js"></script>
			<script src="js/iniciarSesion.js"></script>
</body>
</html>
