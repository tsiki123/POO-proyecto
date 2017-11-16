<?php 
    include_once('logout.php');
    include_once('class/Couta.php');
   
   
        $codigo=$_POST['prestamo1'];

        $fechahoy=date('Y-m-j');
        $db->query("UPDATE prestamo SET estado_prestamo=1 WHERE codigo_prestamo='$codigo'");
        $db->query("UPDATE prestamo SET fecha_aprobacion='$fechahoy' WHERE codigo_prestamo='$codigo'");


        $buscar=$db->query("SELECT * FROM prestamo WHERE codigo_prestamo='$codigo'");
        $row=$buscar->fetch();
   
        $monto=$row["monto_prestamo"];
        $monto2=$monto/4;

        for($i=1;$i<=4;$i++){
            $dia=30*$i;
            $fecha1=date('Y-m-j');
            $nuevafecha1 = strtotime ( "+$dia day" , strtotime ( $fecha1 ) ) ;
            $nuevafecha1 = date ( 'Y-m-j' , $nuevafecha1 );
    
            $cuota=new Cuota($codigo, $monto2, $nuevafecha1);
            $cuota->guardarCuota();



        }
        
    
     /*
        for($i=1;$i<=4;$i++){
            $cantidad=$i*30;
            $fecha1=date('Y-m-j');
            $nuevafecha1 = strtotime ( "+$cantidad day" , strtotime ( $fecha1 ) ) ;
            $nuevafecha1 = date ( 'Y-m-j' , $nuevafecha1 );
            $cuota=new Cuota($codigoPrestamo, $monto2, $nuevafecha1 );
            $cuota->guardarCuota();
    
        }*/

   
   
    
    
 
  

   

    
    

   
    header("location: gerentePrestamo.php");
?>
