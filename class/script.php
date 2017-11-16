<?php
    include_once("logout.php");
	include_once("Couta.php");

	/*$cuota=new Cuota(10, 500, '2017-11-20');
	$cuota->guardarCuota();		*/

    //include_once("Prestamo.php");


	
		$db->query("DELETE FROM cuota");
		$db->query("DELETE FROM prestamo");
		$db->query("DELETE FROM usuario");
    /*$codigo=6;
   $prestamo=new Prestamo($codigo, $monto);
    $prestamo->guardarPrestamo();*/



	/*$guion="-";
	$ano=date("Y");
	$conca=$guion.$ano;
	$convertir=(string) $codigo;
	$concatenacion=$codigo.$conca;
	echo $concatenacion;
*/
	//$db->query("UPDATE prestamo SET codigo_final='$concatenacion' WHERE codigo_prestamo='$codigo'");

	/*$busqueda=$db->query("SELECT * FROM cuota ");
	foreach($busqueda as $resultado){
		echo $resultado['codigo_cuota']."\n";
		echo $resultado['fecha_pago'];
		
	}
*/


//$db->query("DELETE FROM cuota");
//$db->query("DELETE FROM prestamo");


?>
