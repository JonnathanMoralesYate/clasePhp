<?php

class circulo{

    private $radio;

    public function __construct($radio){
        $this->radio=$radio;
    }

    public function getRadio(){
        return $this->radio;
    }

    public function setRadio($radio){
        return $this->radio=$radio;
    }


    public function area(){

        $area = (3.1416)*(pow($this->radio,2));

        return $area;

    }

    public function perimetro(){

        $perimetro =(2)*(3.1416)*($this->radio);

        return $perimetro; 


    }
}

?>