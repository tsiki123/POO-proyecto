<?php
    session_start();
    $_SESSION['PRESTAMO']=$_POST['jose'];
    header("location: gerentePrestamo.php")
?>