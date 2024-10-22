<?php

class rectangulo{

    private $largo;
    private $ancho;

    public function __construct($largo, $ancho){

        $this->largo=$largo;
        $this->ancho=$ancho;

    }

    public function setLargo(){
        return $this->largo;
    }

    public function getLargo($largo){
        return $this->largo=$largo;
    }

    public function setAncho(){
        return $this->ancho;
    }

    public function getAncho($ancho){
        return $this->ancho=$ancho;
    }

    public function area(){

        $area = ($this->largo)*($this->ancho);

        return $area;

    }

    public function perimetro(){

        $perimetro = (2)*($this->largo) + (2)*($this->ancho);

        return $perimetro;

    }

    
}

?>