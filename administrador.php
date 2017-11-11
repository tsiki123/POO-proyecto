 <?php
    include_once('logout.php');
     $buscar=$db->query('SELECT * FROM usuario');

      
     foreach($buscar as $resultado ){
         echo $resultado['nombre'];
         echo "    ";
         echo $resultado['apellido'];
         echo "   \n";
 
     }
    
     
?>


    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="#"><?php echo $_SESSION['usuario'];?></a>
     <h1>BIENVENIDO</h1>&nbsp;
    <a class="navbar-brand" href="#"><h3><?php echo $_SESSION['usuario'];?></h3></a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#"> <span class="sr-only"></span></a>


  </div>
  <div class="tab-pane" id="profile" role="tabpanel">
  <table class="table table-inverse">
  <table class="table table-striped">
  <thead>
    <tr>
      <th>#</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Username</th>
      <th>No.IDENTIDAD</th>
      <th>NOMBRE</th>
      <th>APELLIDO</th>
      <th>CORREO</th>
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
    
            while($row=$buscar->fetch()){
                ?>
                <tr>
                    <th><?php echo $row['identidad'];?></th>
                    <th><?php echo $row['nombre'];?></th>
                    <th><?php echo $row['apellido']?></th>

                    <th><?php echo $row['correo'];?></th>
                </tr>
                
                
                <?php
            }
        
    ?> 
  
    