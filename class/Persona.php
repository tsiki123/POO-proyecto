<?php
  class Persona{
        private $numeroIdentidad;
        private $nombre;
        private $apellido;
        private $numeroTelefono;
        private $numeroCelular;
        
        
        public function __contruct($id, $nombre, $apellido, $telefono, $celular){
            $this->nombre=$nombre;
            $this->numeroIdentidad=$id;
            $this->apellido=$apellido;
            $this->numeroTelefono=$telefono;
            $this->numeroCelular=$celular;

        }
     
        
        public function setNumeroIdentidad($var){$this->numeroIdentidad=$var;}
        public function setNombre($var){$this->nombre=$var;}
        public function setApellido($var){$this->apellido=$var;}
        public function setNumeroTelefono($var){$this->numeroTelefono=$var;}
        public function setNumeroCelular($var){$this->numeroCelular=$var;}
   

        public function getNumeroIdentidad(){return $this->numeroIdentidad;}
        public function getNombre(){return $this->nombre;}
        public function getApellido(){return $this->apellido;}
        public function getNumeroTelefono(){return $this->numeroTelefono;}
        public function getNumeroCelular(){return $this->numeroCelular;}
  }
?>