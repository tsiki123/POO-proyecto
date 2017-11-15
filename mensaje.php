<?php
    include_once("class/Mensaje.php");
    include_once('logout.php');
    $nombre=$_POST['nombre'];
    $correo=$_POST['correo'];
    $mensaje=$_POST['mensaje'];

    $men=new Mensaje($nombre, $correo, $mensaje);
    $men->enviarMensaje();
   /* $sql="INSERT INTO mensaje(nombre, correo, mensaje )VALUES('$nombre', '$correo', '$mensaje')";
    $db->query($sql);*/
    print "<b>Gracias por su mensaje!!!</p>";

?>