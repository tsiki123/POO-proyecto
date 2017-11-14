<?php

	class Nodo{
        
        //Propiedades
		private $siguiente="root";

        //Constructor
		public function __construct($sig){
			$this->$siguiente = $sig;			
		}

        //Metodos
        public function setSiguiente($sig){
            $this->siguiente=$sig;
        }
        
        public function getSiguiente(){
            return $this->siguiente;
        }

	}
?>