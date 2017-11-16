<?php
  session_start();
  if(!isset($_SESSION['CODIGO']) || $_SESSION['TIPO']!=1){
    header('location: inicioSesion.php');
  }
  include_once('logout.php');



?>



<!DOCTYPE html>
<html>
<title>Gerente Prestamo</title>
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
<body >

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
    <a class="nav-link" data-toggle="tab" href="#pedir" role="tab"> VER CUOTAS</a>
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
                <div class="w3-card-4" style="width: 500px; background-color: white;">
                
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
                    <table class="table table-striped">
                        <thead>
                          <tr>
                          <th>codigo prestamo</th>
                          <th>codigo final</th>
                            <th>Nombre del cliente</th>
                            <th>Monto del prestamo</th>
                            <th>Estado del prestamo</th>
                            <th>Fecha de solicitud</th>
                            <th>Fecha de aprobacion</th>
                            <th>Fecha de entrega</th>
                          </tr>
                        </thead>
                        <tbody>
              <!-- realizar pago-->
                            <?php
                            if(date('d')<=20){?>

                              <form action="operar.php" method="post">
                                <input type="text"  name="prestamo1" placeholder="Escriba el codigo">
                                <input type="submit"class="btn btn-primary" name="aprobar" value="Aprobar">             
                              </form>
                              <form action="rechazar.php"  method="POST">
                                  <input type="text" name="prestamo2" placeholder="Escriba el codigo"> 
                                  <input type="submit"  class="btn btn-danger" id="rechazar"  value="Rechazar">  
                                </form>
                            
                            
                      <?php

                            }
                      
                      ?> 
                    
                          <?php 
                                  
                                
                                  $busqueda=$db->query("SELECT *
                                  FROM prestamo
                  INNER JOIN estado_prestamo ON prestamo.estado_prestamo= estado_prestamo.estado_prestamo;");

                                  while($fila=$busqueda->fetch()){
                                      $name=$fila['codigo_usuario'];
                                        $query="SELECT nombre FROM usuario WHERE codigo_usuario='$name' ";
                                        $registro=$db->query($query);
                                        $nombre=$registro->fetch();
                                      ?>
                                      <tr>

                                          <th><?php echo $fila['codigo_prestamo'];?></th>
                                          <th><?php echo $fila['codigo_final'];?></th>
                                          <th><?php echo $nombre['nombre'];?></th>
                                          <th><?php echo $fila['monto_prestamo'];?></th>
                                          <th><?php echo $fila['descripcion']?></th>  
                                          <th><?php echo $fila['fecha_solicitud']?></th> 
                                          <th><?php echo $fila['fecha_aprobacion']?></th> 
                                          <th><?php echo $fila['fecha_tentativa']?></th> 
                                      </tr>
                                      
                                      
                                      <?php
                                  }
                              
                          ?> 
                        
                          
                        </tbody>
                      </table>
            
            
            
             

				
			
			
              
              
                
     
      </div>
      <div class="tab-pane " id="pedir" role="tabpanel">
         
          <form method="post" action="buscarprest.php">
                <input type="text" name="jose"  placeholder="CODIGO PRESTAMO">
                <input type="submit"  class=" btn btn-primary " value="buscar cuotas">
          </form>
          <form action="pagarCuota.php" method="post">
                 <input type="text" name="pagoCuota" placeholder="CODIGO DE LA CUOTA" >
                 <input type="submit" class="btn btn-danger" value="pagar">                 
          </form>
          <form action="terminar.php" method="post">
                 <input type="text" name="terminarPagos" placeholder="CODIGO DEL PRESTAMO" >
                 <input type="submit" class="btn btn-danger" value="cancelar prestamo">                 
          </form>

          <table class="table table-striped">
          <thead>
            <tr>
             <th>CODIGO CUOTA</th>
              <th>ESTADO CUOTA</th>
              <th>MONTO CUOTA</th>
              <th>FECHA PAGO</th>
            </tr>
          </thead>
          <tbody >
          <?php
              if(isset($_SESSION['PRESTAMO'])){
                    $copresta=$_SESSION['PRESTAMO'];
                    $resident=$db->query("SELECT * FROM cuota WHERE codigo_prestamo='$copresta'");
                    foreach($resident as $resul){
                        $pikachu=$resul['estado_cuota'];
                        $pika=$db->query("SELECT * FROM estado_cuota WHERE estado_cuota='$pikachu'");
                        $retornable=$pika->fetch();
          ?>
                         <tr>

                            <th><?php echo $resul['codigo_cuota'];?></th>
                            <th><?php echo $retornable['descripcion'];?></th>
                            <th><?php echo $resul['monto_cuota'];?></th>
                            <th><?php echo $resul['fecha_pago']?></th>  
                        </tr> 
                      
                      
              <?php

                    }
              }
          
          ?>

    
          
                        
                        
                       
                    
                                
                    
                   
                    
                       
                        
                        
          
          
            
          </tbody>
        </table>
      </div>

     




</div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/controlador.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>

