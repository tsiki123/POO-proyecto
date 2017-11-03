<?php
   abstract class Persona{
        private $numeroIdentidad;
        private $nombre;
        private $apellido;
        private $numeroTelefono;
        private $numeroCelular;
        
        abstract function setNumeroIdentidad($var);
        abstract function setNombre($var);
        abstract function setApellido($var);
        abstract function setNumeroTelefono($var);
        abstract function setNumeroCelular($var);
        abstract function setCodigoPrestamo($var);

        abstract function getNumeroIdentidad();
        abstract function getNombre();
        abstract function getApellido();
        abstract function getNumeroTelefono();
        abstract function getNumeroCelular();
  }
?>