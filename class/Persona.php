<?php
  class Persona{
        private $numeroIdentidad;
        private $nombre;
        private $apellido;
        private $numeroTelefono;
        private $numeroCelular;

        function __contstruct($numeroIdentidad,$nombre,
        $apellido, $numeroTelefono, $numeroCelular){
            $this->numeroIdentidad=$numeroIdentidad;
            $this->nombre=$nombre;
            $this->apellido=$apellido;
            $this->numeroTelefono=$numeroTelefono;
            $this->numeroCelular=$numeroCelular;
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