<?php	
		include_once('logout.php');
		session_start();
		

	if(isset($_POST['nombre-usuario']) && isset($_POST['contrasena'])){
		$usuario= $_POST['nombre-usuario'];
		$contrasena= $_POST['contrasena'];
		
		$query="SELECT tipo_usuario, codigo_usuario,  nombre FROM usuario WHERE nombre_usuario='$usuario' and contrasena='$contrasena' ";
		$consulta=$db->query($query);
		$row=$consulta->fetch();
		$_SESSION['CODIGO'] =$row['codigo_usuario'];
		$_SESSION['NOMBRE']=$row['nombre'];
		$tipo=$row['tipo_usuario'];
		$_SESSION['TIPO']=$tipo;

		
		
			switch($tipo){
				
							case '0':
								
								header('location: administrador.php');
								break;
							case '1';
								
								header('location: gerentePrestamo.php');
								break;
							case '2':
							
								header('location: cliente.php');
								break;
						

				
			}

			
		}
		
		
		
	
	
	
		
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
<body style="background-image:url(imagenes/background.jpg); background-size:cover; background-attachment: fixed;">
		<div class="container">
				<center><h1> <strong> <img src="imagenes/coop4.jpg" style="width:300px; padding: 10px; margin:20px;" > </strong> </h1></center>
				<center><h1> <strong></strong> </h1></center>
				
				<center><h5>Inicia sesion para acceder al sistema</h5></center>
		</div>

		<center>
			<div class= "well" id = "div-formulario1"  style="width:500px" style="height: 500px">


				<form style="width:300px"  class="well" style="height: 500px" action="inicioSesion.php" method="POST">
					<div>
						<input type="text" class="form-control" name="nombre-usuario" id="nombre-usuario" placeholder="nombre de usuario" require autofocus >
					</div></br></br>
					
					
					<div>
						<input type="password" class="form-control" name="contrasena" id="contrasena" placeholder="contraseña" require>
					</div></br>
					<div>
						
						<input type="submit" class="btn btn-primary btn btn-lg" value="Ingresar">
					</div>
				</form>

						
		        		<br>
		        		<a href="index.html" style="color:#000000;">regresar</a><br>

				</div>	
					<a href="crearCuenta.php" style="color: #000000;">Crear Una Cuenta de afiliacion</a><br>
			
			
			
					
		</center>
	

			<script src="js/jquery.min.js"></script>
  			<script src="js/bootstrap.min.js"></script>
			<script src="js/iniciarSesion.js"></script>
</body>
</html>
