<?php
  session_start();
  if(!isset($_SESSION['CODIGO']) || $_SESSION['TIPO']!=2){
    header('location: inicioSesion.php');
  }
  include_once('logout.php');



?>



<!DOCTYPE html>
<html>
<title>Principal</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/bootstrap.css">
<script src="js/bootstrap.js"></script>
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>
<body style="background-image:url(imagenes/background.jpg); background-size:cover; background-attachment: fixed;">

      <!-- Navbar -->
      <div class="w3-top" >
          <div class="w3-bar w3-light-blue w3-card">
                   <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
                   <a href="#" class="w3-bar-item w3-button w3-padding-large"><img src="imagenes/coop4.jpg" style="width:150px; height:50px; padding: 10px; margin:10px;"></a>
                   <a href="#band" class="w3-bar-item w3-button w3-padding-large w3-hide-small" style="width:200px; height:50px; padding: 10px; margin:20px;">BIENVENIDO</a>
          
                  <a href="#band" class="w3-bar-item w3-button w3-padding-large w3-hide-small" style="width:200px; height:50px; padding: 10px; margin:20px;"><?php  echo $_SESSION['NOMBRE'];?></a>
  
          
                 
                  <div style="align: right:">
                        <span><a class="w3-bar-item w3-button w3-padding-large w3-hide-small" style="width:200px; height:50px; padding: 10px; margin:20px;" href="cerrarSesion.php">Cerrar Sesion</a></span>  
                  </div>

          

      </div>


<ul class="nav nav-tabs" style="background-color: black;" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#home" role="tab">PERLFIL </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#profile" role="tab">VER PRESTAMOS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#pedir" role="tab">PEDIR PRESTAMOS</a>
  </li>


</ul>
<div class="tab-content">
      <div class="tab-pane active" id="home" role="tabpanel">
               <?php
              $codigo=$_SESSION['CODIGO'];
              $sql="SELECT * FROM usuario WHERE codigo_usuario='$codigo'";
              $consulta=$db->query($sql);
              $fila=$consulta->fetch();  
              ?>
              <center>
                <div class="card w3-card-4" style="width: 500px; background-color: white; margin: 4px">
                
                <p>
                   <div>
                        <div style="background-color: lightblue; height: 100px"><br> <br><?php echo $fila['nombre'].$fila['apellido']?></div><br>
                  </div>
                  <div>
                       <strong><div style="float: left; width: 250px">numero de identidad:</div></strong> <div style="float: left;"><?php echo $fila['identidad'];?></div><br>
                  </div>
                  <div><br> <br>
                       <strong><div style="float: left; width: 250px;">nombre de usuario:</div></strong> <div style="float: left;"><?php echo $fila['nombre_usuario']?></div><br>
                  </div>
                  
                  <div><br> <br>
                       <strong><div style="float: left; width: 250px;">telefono:</div></strong> <div style="float: left;"><?php echo $fila['n_telefono'];?></div><br>
                  </div>
                  <div><br> <br>
                       <strong><div style="float: left; width: 250px;">celular:</div></strong> <div style="float: left;"><?php echo $fila['n_celular'];?></div><br>
                  </div><br> <br><br> <br>
                  
                  
                  
                </div>
                </p>
              <center>     
      </div>
      <div class="tab-pane " id="profile" role="tabpanel">

             <?php 
             $cod=$_SESSION['CODIGO'];
             $sql2="SELECT *FROM prestamo WHERE codigo_usuario='$cod'";
             $row=$db->query($sql2);
             while($res=$row->fetch()){
                  $esta=$res["estado_prestamo"];
                  $fin=$db->query("SELECT * FROM estado_prestamo WHERE estado_prestamo='$esta' ");
                  $line=$fin->fetch();
                  
              ?>
                
                    <div class="card  card w3-card-4" style="width: 400px; float: left; background-color: white;">
                              <div>
                                    
                                  <center> <div style="background-color: lightblue; height: 100px"><br> <br><?php echo $_SESSION['NOMBRE'];?></div><center><br>
                              </div>
                              <div>
                                  <strong><div style="float: left; width:  250px">codigo</div></strong> <div style="float: left;"><?php echo $res['codigo_final'];?></div><br>
                              </div>
                              <div><br> <br>
                                  <strong><div style="float: left; width: 250px;">estado</div></strong> <div style="float: left;"><?php echo $line['descripcion'];?></div><br>
                              </div>
                              
                              <div><br> <br>
                                  <strong><div style="float: left; width: 250px;">monto</div></strong> <div style="float: left;"><?php echo $res['monto_prestamo'];?></div><br>
                              </div>
                              <br> <br><br> <br>
                      </div> 
                  <?php
                    $codigoprestamo=$res['codigo_prestamo'];
                    $trae=$db->query("SELECT * FROM cuota WHERE codigo_prestamo=$codigoprestamo");
                   
                    while($linea=$trae->fetch()){
                        $state=$linea['estado_cuota'];
                        $final=$db->query("SELECT * FROM estado_cuota WHERE estado_cuota=$state");
                        $end=$final->fetch();
                        ?>
                          <div>codigo:  <?php echo $linea['codigo_cuota'];?>  </div>
                          <div>fecha: <?php echo $linea['fecha_pago'];?></div>
                          <div>monto: <?php echo $linea['monto_cuota'];?></div>
                          <div>estado: <?php echo $end['descripcion'];?></div>




                  <?php

                    }
                  
                  ?>    
                       
                  
              
                

              <?php

             }

				
			?>
			
              
              
                
     
      </div>
      <div class="tab-pane " id="pedir" role="tabpanel">
            <br><br><br>
            <center>
                <div class=" card w3-card-4" style="width: 500px; background-color: lightblue; height: 300px;  ">
                    <br><br><br><br>
                      <form action="presta.php" method="post">
                        <div>
                          <input  style="width: 280px; " class="form-control "type="number" min="1" max="50000.00" name="monto" placeholder="pedir prestamo" >
                        </div><br><br>
                        <div>
                          <input type="submit" class="btn btn-primary" value="Pedir Prestamo">
                        </div>
                      </form>
                </div>
            </center>    
     
      </div>
     




</div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/controlador.js" ></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
