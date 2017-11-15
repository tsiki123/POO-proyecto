<?php
  
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <meta name="description" content="">

    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>
    <style >
    .overlay{
     display: none;
     position: absolute;
     top: 0;
     left: 0;
     width: 100%;
     height: 100%;
     background: #000;
     z-index:1001;
     opacity:.75;
     -moz-opacity: 0.75;
     filter: alpha(opacity=75);
    }

   

  </style>

    <title>Crear Cuenta</title>
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/personalizado.css">

    
  </head>

  <body style="background-image:url(imagenes/background.jpg); background-size:cover; background-attachment: fixed;">
    <div s " class="fixed" >
    

    <div> 
    
        <a href="index.html"><img src="imagenes/coop2.jpg" style="width:200px; padding: 10px; margin:10px;">
        </a>
        <div class="dropdown">
            <button class="dropbtn">Dropdown</button>
            <div class="dropdown-content">
              <a href="#">Link 1</a>
              <a href="#">Link 2</a>
              <a href="#">Link 3</a>
            </div>
          </div>


          
       
          


    

        <span style="float:right; padding-top:12px; margin:10px;">
              
        <a href="" ><button id="finsesion">Salir</button></a>
        </span>
         <hr style="margin-top: 0px">

    </div>
    
    <h1><center><strong>OPCIONES</strong></center></h1>
     <br>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-12 col-sm-6 col-md-6 col-lg-6 hidden-xs">
              
          
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <div class="well" id = "div-formulario1">
              
              </table>            
          </form>
       </div>

</div>

      </div>

      <hr>

      <footer>
        <p>&copy; 2017 CooperativaPOO, Inc.</p>
      </footer>
    </div> 
</div>
<div class="modal fade" tabindex="-1" role="dialog" id="modal-condiciones">
              
              <div class="modal-dialog" role="document"  style="width:900px" style="height: 800px" >
                <div class="modal-content">
                   
                  <div class="modal-body">
                            <?php  
                              include_once("solicitudes.php");
                            ?>
                      </div>
                       <div class="modal-footer">
                        <center>
                          <td colspan="2">
                            <a href="indexCreaCuenta.php">
                              <input type="submit" name="btn-cancelar" id="cancelar" 
                              value="Cancelar" class="btn btn-warning">
                            </a>
                            <input type="reset" name="btn-acepto" id="acepto" 
                            value="Acepto" class="btn btn-primary">
                            </a>
                          </td>
                        </center>
                      </div> 
                </div><!-- /.modal-content -->
                
              </div><!-- /.modal-dialog --> 
               
          </div><!-- /.modal -->

         




       <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
     <script type="text/javascript" src="js/registro.js"></script>
    <script src="js/validarRegistro.js"></script>
         
       <script type="text/javascript">
      $(function () {
    $('[data-toggle="popover"]').popover();
      });
    </script>    
  </body>
</html>

