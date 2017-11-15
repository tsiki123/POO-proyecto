<?php 
    class Prestamo{
        private $codigoUsuario;
        private $codigoPrestamo;
        private $montoPrestamo;
        private $cantidadCuotas;
        private $fechaTentativa;
        private $fechaAutorizacion;
        private $estadoPrestamo;
        
        

        public function  __construct($codigoUsuario, $montoPrestamo){
                $this->codigoUsuario=$codigoUsuario;
             
                $this->montoPrestamo=$montoPrestamo;
		}

		public function guardarPrestamo(){
			  	$host ='ec2-107-22-235-167.compute-1.amazonaws.com';
   				$dbname ='d5gjn5glnttjlc';
   				$username ='gvdiiqwddyewan';
  		 		$password ='d786734864c2bfa3eee8a82eca6c67c8f24b9892d4619dd8347c366d16f1b151';
  				try{ 
  					 $db = new PDO('pgsql:host='.$host .';dbname='.$dbname.'', $username, $password );
   
       					$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
   				}catch(PDOException $e){
   
      					 echo "ERROR: " . $e->getMessage();
   
   				}
				$codigo=$this->codigoUsuario;
				$monto=$this->montoPrestamo;
			
				$fechaSoli=date('Y-m-j');
		
				$nuevafecha = strtotime ( '+20 day' , strtotime ( $fechaSoli) ) ;
				$nuevafecha = date ( 'Y-m-j' , $nuevafecha );


				//////codigo nuevo
				$guion="-";
				$ano=date("Y");
				$conca=$guion.$ano;
				$convertir=(string) $codigo;
				$concatenacion=$codigo.date("z").date("G").$conca;
				
			
				$sql="INSERT INTO prestamo(codigo_final, codigo_usuario, estado_prestamo, monto_prestamo, fecha_solicitud, fecha_tentativa)VALUES('$concatenacion', '$codigo',0, '$monto', '$fechaSoli','$nuevafecha' )";
				$db->query($sql);


		}
               

    }
?>
