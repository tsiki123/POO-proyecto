<?php
    include_once("logout.php");
    $codigo=$_POST['terminarPagos'];
    $db->query("UPDATE prestamo SET estado_prestamo=3 WHERE  codigo_prestamo='$codigo'");
    header("location: gerentePrestamo.php");
    
?>