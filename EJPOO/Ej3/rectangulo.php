<?php

class rectangulo{

    private $largo;
    private $ancho;

    public function __construct($largo, $ancho){

        $this->largo=$largo;
        $this->ancho=$ancho;

    }

    public function getLargo(){
        return $this->largo;
    }

    public function setLargo($largo){
        return $this->largo=$largo;
    }

    public function getAncho(){
        return $this->ancho;
    }

    public function setAncho($ancho){
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