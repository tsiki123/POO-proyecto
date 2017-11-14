<?php

class manejoFecha extends Nodo{
    //atributos
    private $dia;
    private $mes;
    private $año;
    
  
    public function __construct($d,$m,$a){
        $this->dia=$d;
        $this->mes=$m;
        $this->año=$a;
    }
    
   
    public function ObtenerFecha(){
        return '"'.$this->año.'-
        '.$this->mes.'-'.$this->dia.'"';
    }
    
    
  
    public function getDia(){
        return $this->dia;
    }
    

    public function getMes(){
        return $this->mes;
    }
    

    public function getAño(){
        return $this->año;
    }
}

?>