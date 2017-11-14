<?php 
    class Prestamo{
        private $codigoUsuario;
        private $codigoPrestamo;
        private $montoPrestamo;
        private $cantidadCuotas;
        private $fechaTentativaAcreditacion;
        private $fechaAutorizacion;
        private $estadoPrestamo;
        
        

        public function  __contruct($codigoUsuario,$codigoPrestamo, $montoPrestamo, $cantidadCuotas, $fechaTentativaAcreditacion){
                $this->codigoUsuario=$codigoUsuario;
                $this->codigoPrestamo=$codigoPrestamo;
                $this->montoPrestamo=$montoPrestamo;
                $this->cantidadCuotas=$cantidadCuotas;
                $this->fechaTentativaAcreditacion=$fechaTentativaAcreditacion;
        }


    }
?>