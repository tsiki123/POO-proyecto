<?php
  
    include_once('class/Conexion.php');
    $conexion=new Conexion();
    if(isset($_POST["correo"])&&isset($_POST["contrasena"])){    
        //$sql="SELECT * from tipo";
        $rec=$conexion->getDb()->prepare('SELECT * FROM tipo');
        $rec->execute(); 
        while($row=$rec->fetch()){
            echo $row;
        }
       /*if($conexion->getDb()->rowCount()>0){
           echo "existe"; 
        }else{
            header('location: index.php');
        }*/
    }else{

    }
?>