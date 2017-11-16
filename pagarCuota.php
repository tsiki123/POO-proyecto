<?php
    include_once("logout.php");
    $pago=$_POST['pagoCuota'];
    $db->query("UPDATE cuota SET  estado_cuota=1 WHERE codigo_cuota='$pago'");
    header("location: gerentePrestamo.php");
?>
