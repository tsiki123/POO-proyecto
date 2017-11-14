<?php
    include_once("Persona.php");
    class Usuario extends Persona{
        private $codigoUsuario;
        private $nombreUsuario;
        private $contrasena;
        private $tipoUsuario;

        public function __contruct(){
            parent::__contruct();

        }
       
        public function __construct($nick, $contr, $id, $nombre, $apellido, $telefono, $celular){
                $this->tipoUsuario= 2;
                $this->nombreUsuario=$nick;
                $this->contrasena=$contr;
                parent::__construct($id, $nombre, $apellido, $telefono, $celular);
        }
   

        public function setTipoUsuario($val){$this->tipoUsuario=$val;}
        public function setCodigoUsuario($val){$this->codigoUsuario=$val;}
        public function setNombreUsuario($val){$this->nombreUsuario=$val;}
        public function setContrasena($val){$this->contrasena=$val;}

        public function getCodigoUsuario(){return $this->codigoUsuario;}
        public function getnombreUsuario(){return $this->nombreUsuario;}
        public function getContrasena(){return $this->contrasena;}
        public function getTipoUsuario(){return $this->tipoUsuario;}

        public function guardarUsuario(){
            include_once("../logout.php");
            $sql="INSERT INTO usuario(tipo_usuario, nombre, nombre_usuario, apellido, n_telefono, identidad, n_celular, contrasena)VALUES(2, '$this->getNombre()', '$this->nombreUsuario', '$this->getApellido()', '$this->getNumeroTelefono()', '$this->getNumeroIdentidad()', '$this->getNumeroCelular()', '$this->contrasena' )";
            
            
            try{
                $db->query($sql);
            }catch(Exception $e){
                echo "no se guardo";
                echo $e;
            }
        }


            
            



    }

?>