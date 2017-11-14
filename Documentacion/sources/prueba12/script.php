<?php
    include_once("logout.php");
/***********************INSERTANTODO VALORES DE ESTADO CUOTA*****************************/
	//$db->query("INSERT INTO estado_couta(estado_cuota, descripcion)VALUES(0, 'PENDIENTE')");
	//$db->query("INSERT INTO estado_cuota(estado_cuota, descripcion)VALUES(0, 'PENDIENTE')");
	//$db->query("INSERT INTO tipo_usuario(tipo_usuario, descripcion)VALUES(2, 'CLIENTE')");*/

/*********************INSERTANDO USUARIARIOS ***********************************************/
  /* $sql="INSERT INTO usuario(tipo_usuario, nombre, nombre_usuario, apellido, n_telefono, identidad, n_celular, contrasena)VALUES(0, 'jose luis', 'root', 'alvarenga', '22237574', '0801199902654', '87746606', 'toor' )";*/ 


/*************INSERTANTO VALORES DEL ESTADO_PRESTAMO*************************/
	/*$db->query("INSERT INTO estado_prestamo(estado_prestamo, descripcion) VALUES(0,'PENDIENTE')"); 
	$db->query("INSERT INTO estado_prestamo(estado_prestamo, descripcion) VALUES(1,'APROBADO')"); 
	$db->query("INSERT INTO estado_prestamo(estado_prestamo, descripcion) VALUES(2,'RECHAZADO')"); */ 
	 
   //$db->query($sql);
	$sql="SELECT * FROM estado_prestamo";
    $buscar= $db->query($sql);
    foreach($buscar as $resultado ){
        echo $resultado['estado_prestamo'];
		echo $resultado['descripcion'];
		
    }

	
	//$db->query("DELETE FROM tipo_usuario");
   

?>
