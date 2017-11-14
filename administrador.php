<<<<<<< HEAD
<?php
    session_start();
 	$_SESSION["usuario"]="JOSE LUIS ALVARENGA GONZALEZ";   
     if( !isset($_SESSION["usuario"]) ){
        header("location:index.php");
        exit();
     }
    include_once('logout.php');
     $buscar=$db->query('SELECT * FROM usuario');

     	
    //
     
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.min.js"></script>
  <!--  <link rel="stylesheet" href="css/estilos.css">  -->
    <title>Cooperativa POO</title>
</head>
<body>
<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
     <h1>BIENVENIDO</h1>&nbsp;
    <a class="navbar-brand" href="#"><h3><?php echo $_SESSION['usuario'];?></h3></a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#"> <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#"></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
            <a href="cerrarSesion.php">Cerrar Sesión</a>

    </form>
  </div>
</nav>


<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Profile</a>
  </li>

</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane active" id="home" role="tabpanel">

  </div>
  <div class="tab-pane" id="profile" role="tabpanel">
  <table class="table table-striped">
  <thead>
    <tr>
      <th>No.IDENTIDAD</th>
      <th>NOMBRE</th>
      <th>APELLIDO</th>
      <th>CORREO</th>
    </tr>
  </thead>
  <tbody>
    <?php 

            while($row=$buscar->fetch()){
                ?>
                <tr>
                    <th><?php echo $row['identidad'];?></th>
                    <th><?php echo $row['nombre'];?></th>
                    <th><?php echo $row['contrasena']?></th>

                    <th><?php echo $row['correo'];?></th>
                </tr>
                
                
                <?php
            }
        
    ?> 
  
    
  </tbody>
</table>
  </div>
 
</div>
  

 


           

</body>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/controlador.js" ></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
=======
<?php
    session_start();
    include_once("logout.php");
    
  
    if( !isset($_SESSION["TIPO"]) || $_SESSION["TIPO"]!=0){
        header("location:index.html");
        exit();
     }
     
    include_once('logout.php');
     $buscar=$db->query('SELECT * FROM usuario');

     	
    //
     
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.min.js"></script>
  <!--  <link rel="stylesheet" href="css/estilos.css">  -->
    <title>Cooperativa POO</title>
</head>
<body>
<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
     <h1>BIENVENIDO</h1>&nbsp;
    <a class="navbar-brand" href="#"><h3><?php echo $_SESSION['NOMBRE'];?></h3></a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#"> <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#"></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
            <a href="cerrarSesion.php">Cerrar Sesión</a>

    </form>
  </div>
</nav>


<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#home" role="tab">VER PRESTAMOS </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#profile" role="tab">VER PERFILES</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#mensajes" role="tab">MENSAJES</a>
  </li>

</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane active" id="home" role="tabpanel">
          <table class="table table-striped">
          <thead>
            <tr>
             <th>codigo prestamo</th>
              <th>Nombre del cliente</th>
              <th>Monto del prestamo</th>
              <th>Estado del prestamo</th>
            </tr>
          </thead>
          <tbody>
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
                            <th><?php echo $nomre['nombre'];?></th>
                            <th><?php echo $fila['monto_prestamo'];?></th>
                            <th><?php echo $fila['descripcion']?></th>  
                        </tr>
                        
                        
                        <?php
                    }
                
            ?> 
          
            
          </tbody>
        </table>
     
  </div>





  
  <div class="tab-pane" id="profile" role="tabpanel">
          <table class="table table-striped">
          <thead>
            <tr>
              <th>No.IDENTIDAD</th>
              <th>NOMBRE</th>
              <th>APELLIDO</th>
              <th>NOMBRE USUARIO</th>
              <th>TELEFONO</th>
              <th>CONTRASEÑA</th>
            </tr>
          </thead>
          <tbody>
            <?php 

                    while($row=$buscar->fetch()){
                        ?>
                        <tr>
                            <th><?php echo $row['identidad'];?></th>
                            <th><?php echo $row['nombre'];?></th>
                            <th><?php echo $row['apellido']?></th>

                            <th><?php echo $row['nombre_usuario'];?></th>
                            <th><?php echo $row['n_telefono'];?></th>
                            <th><?php echo $row['contrasena'];?></th>
                        </tr>
                        
                        
                        <?php
                    }
                
            ?> 
          
            
          </tbody>
        </table>
  </div>
  <div class="tab-pane " id="mensajes" role="tabpanel">
          <table class="table table-striped">
          <thead>
            <tr>
             <th>nombre</th>
              <th>correo</th>
              <th>mensaje</th>
              
            </tr>
          </thead>
          <tbody>
            <?php 

                   
                    $busqueda=$db->query("SELECT * FROM mensaje");

                    while($fila=$busqueda->fetch()){
                
                        ?>
                        <tr>

                            <th><?php echo $fila['nombre'];?></th>
                            <th><?php echo $fila['correo'];?></th>
                            <th><?php echo $fila['mensaje'];?></th>
                             
                        </tr>
                        
                        
                        <?php
                    }
                
            ?> 
          
            
          </tbody>
        </table>
     
  </div>
 
</div>

</body>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/controlador.js" ></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
>>>>>>> ef0a30a372929149e5e03d78c765d886abaf5358
