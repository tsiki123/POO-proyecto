<?php
    include_once("Persona.php");
    class Usuario extends Persona{
        private $codigoUsuario;
        private $correo;
        private $contrasena;
        private $tipoUsuario;
        public function __constuct($numeroIdentidad,$nombre,
        $apellido, $numeroTelefono, $numeroCelular, $codigoUsuario,$contrasena,$tipoUsuario, $correo){
                $this->codigoUsuario=$codigoUsuario;
                $this->correo=$correo;
                $this->contrasena=$contrasena;
                $this->tipoUsuario=$tipoUsuario;
                parent::__constuct($numeroIdentidad,$nombre,$apellido,$numeroTelefono,$numeroCelular);
        }
   

        public function  setTipoUsuario($val){
            $this->tipoUsuario=$val;
        }
        public function setCodigoUsuario($val){$this->codigoUsuario=$val;}
        public function setCorreo($val){$this->correo=$correo=$val;}
        public function setContrasena($val){$this->contrasena=$val;}

        public function getCodigoUsuario(){return $this->codigoUsuario;}
        public function getCorreo(){return $this->correo;}
        public function getContrasena(){return $this->contrasena;}
        public function getTipoUsuario(){return $this->tipoUsuario;}

        public function guardarUsuario(){
            include_once('../logout.php');
            $sql="INSERT INTO usuario (identidad,nombre,apellido,'numero-celular','numero-telefono','tipo-usuario','codigo-usuario',correo,contrasena)
             VALUES($this->numeroIdentidad,$this->nombre,$this->apellido,$this->numeroCelular,$this->numeroTelefono,
             $this->tipoUsuario,$this->codigoUsuario,$this->correo,'$this->contrasena);";
            $db->query($sql);
            

        }




    }

?>