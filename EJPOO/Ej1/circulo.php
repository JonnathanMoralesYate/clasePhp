<?php

class circulo{

    private $radio;

    public function __construct($radio){
        $this->radio=$radio;
    }

    public function setRadio(){
       return $this->radio;
    }

    public function getRadio($radio){
        return $this->radio=$radio;
    }


    public function area(){

        $area;

        $area = (3.1416)*(pow($this->radio,2));

        return $area;

    }

    public function perimetro(){

        $permitro;

        $perimetro =(2)*(3.1416)*($this->radio);

        return $perimetro; 


    }
}

?>