<?php
    include_once("logout.php");
    $codigo=$_POST['prestamo2'];
    $db->query("UPDATE prestamo SET estado_prestamo=2 WHERE  codigo_prestamo='$codigo'");
    header("location: gerentePrestamo.php");
    
?>
