<?php 
    session_start();
    include_once('class/Prestamo.php');
    include_once('logout.php');
   	$monto=$_POST['monto'];
    $codigo=$_SESSION['CODIGO'];
    //$buscar=$db->query("SELECT * FROM prestamo WHERE codigo_usuario='$codigo' ");
   
		$prestamo=new Prestamo($codigo, $monto);
		$prestamo->guardarPrestamo();
		header("location: cliente.php");
	
	//header("location: cliente.php");
   

?>
