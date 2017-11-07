<?php
    session_start();
    $_SESSION["usuario"]="joseluis";
     if( !isset($_SESSION["usuario"]) ){
        header("location:index.php");
        exit();
     }
    include_once('logout.php');
     $buscar=$db->query('SELECT * FROM usuario');
     	
     foreach($buscar as $resultado ){
         echo $resultado['nombre'];
         echo "    ";
         echo $resultado['apellido'];
         echo "   \n";
 
     }
     
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
    <a class="navbar-brand" href="#"><?php echo $_SESSION['usuario'];?></a>
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
  <table class="table table-inverse">
  <thead>
    <tr>
      <th>#</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Username</th>
    </tr>
  </thead>
  <tbody>
    <?php 
     foreach($buscar as $resultado ){
       
        echo '<tr>';
        
       echo    '<th scope="row">'.$buscar['tipo-usuario'].'</th>';
          
        echo   '<td>'.$buscar["definicion"].'</td>';
          
        echo '</tr>';

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