<?php
    
    class Mensaje{
       private $nombre;
       private $correo;
       private $mensaje;

       public function __construct($name, $email, $message){
            $this->nombre=$name;
            $this->correo=$email;
            $this->mensaje=$message;

       }

       public function getNombre(){return $this->nombre;}
       public function getCorreo(){return $this->correo;}
       public function getMensaje(){return $this->mensaje;}

       public function setNombre($var){$this->nombre=$var;}
       public function setCorreo($var){$this->correo=$var;}
       public function setMensaje($var){$this->mensaje=$var;}

       public function enviarMensaje(){
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
            
            $n=$this->nombre;
            $c=$this->correo;
            $m=$this->mensaje;
            $sql="INSERT INTO mensaje(nombre, correo, mensaje )VALUES('$n', '$c', '$m')";
            $db->query($sql);
       }

    }


?>