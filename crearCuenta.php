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
				<center><h1> <strong> <img src="imagenes/coop2.jpg" style="width:200px"> </strong> </h1></center>
				<center><h1> <strong></strong> </h1></center>
				
				<center><h5>Apertura de Cuenta</h5></center>
				</div>

		<center>
			<div class= "well" id = "div-formulario1"  style="width:600px" style="height: 400px" >
						<table   class="formulario" style="width: 500px" style="height: 200" style="margin: 10px">
			                  <tr>

			                    <label for="txt-nombre">Datos del cuentahabiente:</label>
			                    <td id="nombre"  >
			                    	<input id="txt-nombre" type="text" onclick="pop();" name="txt-nombre" data-html="true" class="form-control" placeholder="Nombre" data-toggle="popover" data-content="-usa [2-12] caracteres <br>-solo usa letras" data-container="body" data-placement="left">
			                    </td>
			                    <td id="apellido">
			                    <input id="txt-apellido" type="text" onclick="pop();" name="txt-apellido" data-html="true" class="form-control" placeholder="primer Apellido" data-toggle="popover" data-content="-Usa [2-12] caracteres <br>-Solo usa letras" data-container="body" data-placement="top" >
			                    </td>

			                    <td id="apellido2">
			                    <input id="txt-apellido2" type="text" onclick="pop();" name="txt-apellido2" data-html="true" class="form-control" placeholder="segundo Apellido" data-toggle="popover" data-content="-Usa [2-12] caracteres <br>-Solo usa letras" data-container="body" data-placement="top" >
			                    </td>

			                  </tr>
			                  
			                  <tr>
			                    <td colspan="2" id="usuario" >
			                    <label for="txt-nombreUsuario">Numero de Identidad :</label>
			                    <input type="text" name="txt-numeroIdentidad" onclick="pop();" class="form-control" data-html="true" placeholder="Numero Identidad" id="txt-numeroIdentidad" data-toggle="popover" data-html="true"  data-content="-Usa [4-15] caracteres <br> -Puedes usar solo numeros" data-container="body" data-placement="left"></td>
			                  </tr>
			                 
			                  <tr>
			                    <td colspan="2" id="contrasena">
			                    <label for="txt-contrasena">Numero Telefonico:</label>
			                    <input type="password" name="txt-contrasena" class="form-control" onclick="pop();" placeholder="Telefono" id="txt-contrasena"  data-toggle="popover" data-html="true" title="Telefono:" data-content="-Usa [8-12] caracteres <br>
			                    -Usa solo numeros <br>" data-placement="left" data-container="body"></td>  </td>
			                    
			                  </tr>
			                  <tr>
			                    <td colspan="2" id="NumCelular">
			                    <label for="txt-contrasena">Numero Celular :</label>
			                    <input type="password" name="txt-celular" onclick="pop();" class="form-control" placeholder="Celular" id="txt-cel" data-toggle="popover" data-html="true" title="Telefono:" data-content="-Usa [8-12] caracteres <br>
			                    -Usa una letra mayuscula y una miniscula como minimo <br>
			                    -Un numero como minimo <br>-Asegurate de que las contraseñas coincidan" data-placement="left" data-container="body" ></td>
			                  </tr>
			                  
			 
			                  
			                  <tr>
			                  
			                    <td colspan="2">
			                    <br>
			                        <input type="submit" id="btn-registrar" onclick="pop();" name="btn-registrar" value="Crear Cuenta" class="btn btn-primary" >  

			                    </td>
			                    <td colspan="2">
			                    <br>
			                        <input type="submit" id="btn-regresar" onclick="pop();" name="btn-regresar" value="Regresar" class="btn btn-primary" >    
			                    </td>
			                  
			                  </tr>
			                   </td>
              </table>
			</div>
					
		</center>
	

<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
<script src="js/IniciarSesion.js"></script>
</body>
</html>
