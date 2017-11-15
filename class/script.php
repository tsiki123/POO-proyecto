<?php
    include_once("logout.php");

    include_once("Prestamo.php");
   	$monto=500.24;
    $codigo=4;
   	$prestamo=new Prestamo($codigo, $monto);
    $prestamo->guardarPrestamo();
	/*$guion="-";
	$ano=date("Y");
	$conca=$guion.$ano;
	$convertir=(string) $codigo;
	$concatenacion=$codigo.$conca;
	echo $concatenacion;

	$db->query("UPDATE prestamo SET codigo_final='$concatenacion' WHERE codigo_prestamo='$codigo'");

	$busqueda=$db->query("SELECT * FROM prestamo");
	foreach($busqueda as $resultado){
		echo $resultado['codigo_prestamo']."\n";
		echo $resultado['codigo_usuario']."\n";
		echo $resultado['estado_prestamo']."\n";
		echo $resultado['monto_prestamo']."\n";
		echo $resultado['codigo_final'];
	}*/



//$db->query("DELETE FROM cuota");
//$db->query("DELETE FROM prestamo");


?>
