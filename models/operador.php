<?php
    switch(accion){
        case 1:
            include_once('class/Conexion.php');
            include_once('../class/Usuario.php');
            session_start();
            $conexion= new Conexion();
            $correo=$_POST['correo'];
            $contrasena=$_POST['contrasena'];
            $query='SELECT * FROM usuario WHERE correo=$correo, contrasena=$contrasena';
            $resultado=$conexion->ejecutarInstruccion($query);
            if($resultado){
                $usuario=new Usuario();
                
                
            }

    }
    

?>