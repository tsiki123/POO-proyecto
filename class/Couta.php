<?php
    class Cuota{
        private $codigoPrestamo;
        private $codigoCuota;
        private $montoPago;
        private $fechaPago;

        public function _construct($codigoPrestamo, $codigoCuota, $montoPago, $fechaPago){
            $this->codigoPrestamo=$codigoPrestamo;
            $this->codigoCuota=$codigoCuota;
            $this->montoPago=$montoPago;
            $this->fechaPago=$fechaPago;

        }

    }
   

?>