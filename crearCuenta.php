<?php

include_once('logout.php');

	if(isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['nombre-usuario']) && isset($_POST['identidad']) && isset($_POST['telefono']) && isset($_POST['celular']) && isset($_POST['contrasena']) && isset($_POST['contrasena2']) ){
			if($_POST['contrasena']==$_POST['contrasena2']){
					$nombre=$_POST['nombre'];
					$apellido=$_POST['apellido'];
					$nick=$_POST['nombre-usuario'];
					$telefono=$_POST['telefono'];
					$celular=$_POST['celular'];
					$identidad=$_POST['identidad'];
					$contrasena=$_POST['contrasena'];
					/*$usuario= new Usuario();
					$usuario->setNombre($nombre);
					$usuario->setApellido($apellido);
					$usuario->setNumeroTelefono($telefono);
					$usuario->setNumeroCelular($celular);
					$usuario->setnombreUsuario($nick);
					$usuario->setNumeroIdentidad($identidad);
					$usuario->setContrasena($contrasena);*/
					
					//$usuario=new Usuario($nick, $contrasena, $identidad, $nombre, $apellido, $telefono, $celular);
					//$usuario->guardarUsuario();
					$sql="INSERT INTO usuario(tipo_usuario, nombre, nombre_usuario, apellido, n_telefono, identidad, n_celular, contrasena)VALUES(2, '$nombre', '$nick', '$apellido', '$telefono', '$identidad', '$celular', '$contrasena' )";
					$db->query($sql);
					header('location: inicioSesion.php');
					
			}else{
				print "Suscontrasenas no coinciden";
			}
	}else{
		//print 'faltan datos';
	}

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
				<center><h1> <strong> <img src="imagenes/coop4.jpg" style="width:150px; height: 75px;"> </strong> </h1></center>
				<center><h1> <strong></strong> </h1></center>
			
		</div>

		<center>
			<div class= "well "  id = "div-formulario1"  style="width:700px; background-color:#d3d3d3;" style="height: 400px" >
						
				<form action="crearCuenta.php" method="POST">
				<table   class="formulario" style="width: 600px" style="height: 200" style="margin: 10px">
			                  <tr>

			                    
			                    <td  >
									<label >Nombre de usuario :</label>
									
			                    	<input type="text" onclick="pop();" name="nombre" data-html="true" class="form-control" placeholder="Nombre" data-toggle="popover" data-content="-usa [2-12] caracteres <br>-solo usa letras" data-container="body" data-placement="left">
			                    </td>
			                    <td >
								<label for="Apellido">apellido :</label>
			                    <input id="apellido" type="text" onclick="pop();" name="apellido" data-html="true" class="form-control" placeholder="apellido" data-toggle="popover" data-content="-Usa [2-12] caracteres <br>-Solo usa letras" data-container="body" data-placement="top" >
								</td>
							  </tr>
							  <tr>
			                    <td  >
			                    <label for="nombre-usuario">Nombre de usuario :</label>
			                    <input type="text" name="nombre-usuario" onclick="pop();" class="form-control" data-html="true" placeholder="Nombre de usuario" id="numero-identidad" data-toggle="popover" data-html="true"  data-content="-Usa [4-15]" data-container="body" data-placement="left"></td>
			                  </tr>
			                  
			                  <tr>
			                    <td  >
			                    <label>Numero de Identidad :</label>
			                    <input type="text" name="identidad" onclick="pop();" class="form-control" data-html="true" placeholder="Numero Identidad" id="numero-identidad" data-toggle="popover" data-html="true"  data-content="-Usa [4-15] caracteres <br> -Puedes usar solo numeros" data-container="body" data-placement="left"></td>
			                  </tr>
			                 
			                  <tr>
			                    <td >
			                	<label >Numero de telefono :</label>
			                    <input type="text" name="telefono" class="form-control" onclick="pop();" placeholder="Telefono" id="numero-telefonico"  data-toggle="popover" data-html="true" title="Telefono:" data-content="-Usa [8-12] caracteres <br>
								-Usa solo numeros <br>" data-placement="left" data-container="body"></td>  </td>
								
								<td >
			                    	<label for="celular">Numero de celular :</label>
										<input type="text" name="celular" class="form-control" onclick="pop();" placeholder="Celular" id="numero-celular"  data-toggle="popover" data-html="true" title="Celular:" data-content="-Usa [8-12] caracteres <br>
										-Usa solo numeros <br>" data-placement="left" data-container="body">
								 </td>
			                    
			                  </tr>
			                  <tr>
			                    <td  >
			                    <label for="contrasena">Contraseña :</label>
			                    <input type="password" name="contrasena" onclick="pop();" class="form-control" placeholder="Escriba su contraseña" id="contrasena" data-toggle="popover" data-html="true" title="Telefono:" data-content="-Usa [8-12] caracteres <br>
			                    -Usa una letra mayuscula y una miniscula como minimo <br>
			                    -Un numero como minimo <br>-Asegurate de que las contraseñas coincidan" data-placement="left" data-container="body" ></td>
								<td  >
								<label for="contrasena2">Confirmar</label>

			                    
			                    <input type="password" name="contrasena2" onclick="pop();" class="form-control" placeholder="confirme contraseña" id="contrasena2" data-toggle="popover" data-html="true" title="Contrasena:" data-content="-Usa [8-24] caracteres <br> Asegurate de que las contraseñas coincidan" data-placement="left" data-container="body" ></td>
			                    
							</tr>
			                  
			 
			                  
			                  <tr>
			                  
			                    <td >
			                    <br>
			                        <input type="submit" id="btn-registrar" onclick="pop();" name="btn-registrar" value="Crear Cuenta" class="btn btn-primary" >  

			                    </td>
			                    <td colspan="2">
			                    <br>
			                    	<a href="index.html">
			                        <input type="submit" id="btn-regresar" onclick="pop();" name="btn-regresar" value="Regresar" class="btn btn-primary" >  
			                        </a>  
			                    </td>
			                  
			                  </tr>
			                   </td>
              </table>

				</form>
			
			</div>
					
		</center>
	

<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>
