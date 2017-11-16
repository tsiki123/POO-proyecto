<?php
    include_once("logout.php");
// $db->query("UPDATE prestamo SET estado_prestamo=1 WHERE codigo_final='4-2017'");

/*********************INSERTANDO USUARIARIOS ***********************************************/
$sql="INSERT INTO usuario(tipo_usuario, nombre, nombre_usuario, apellido, n_telefono, identidad, n_celular, contrasena)VALUES(0, 'jose luis', 'root', 'alvarenga', '22237574', '0801199902654', '87746606', 'toor' )";

  $sql1="INSERT INTO usuario(tipo_usuario, nombre, nombre_usuario, apellido, n_telefono, identidad, n_celular, contrasena)VALUES(1, 'Tania Melissa', 'admin', 'Garcia', '22237574', '0801199902654', '87746606', 'admin' )";

	$db->query($sql);
	$db->query($sql1);

/***********************INSERTANTODO VALORES DE ESTADO CUOTA*****************************/
	//$db->query("INSERT INTO estado_cuota(estado_cuota, descripcion)VALUES(0, 'PENDIENTE')");
	//$db->query("INSERT INTO estado_cuota(estado_cuota, descripcion)VALUES(1, 'PAGADA')");



/// ***********************************insertando tipos de usuarios***************************
	//$db->query("INSERT INTO tipo_usuario(tipo_usuario, descripcion)VALUES(0, 'ADMINISTRADOR')");
	//$db->query("INSERT INTO tipo_usuario(tipo_usuario, descripcion)VALUES(1, 'GERENTE DE PRESTAMO')");
	//$db->query("INSERT INTO tipo_usuario(tipo_usuario, descripcion)VALUES(2, 'CLIENTE')");


/*************INSERTANTO VALORES DEL ESTADO_PRESTAMO*************************/
	//$db->query("INSERT INTO estado_prestamo(estado_prestamo, descripcion) VALUES(0,'PENDIENTE')"); 
//	$db->query("INSERT INTO estado_prestamo(estado_prestamo, descripcion) VALUES(1,'APROBADO')"); 
	//$db->query("INSERT INTO estado_prestamo(estado_prestamo, descripcion) VALUES(2,'RECHAZADO')");  
	 //$db->query("DELETE FROM usuario");
   //$db->query($sql);
	/*$sql="SELECT * FROM estado_prestamo";
    $buscar= $db->query($sql);
    foreach($buscar as $resultado ){
        echo $resultado['estado_prestamo'];
		echo $resultado['descripcion'];
		
    }
*/
	
	//$db->query("DELETE FROM tipo_usuario");*/
	//echo date("Y");
   

?>
