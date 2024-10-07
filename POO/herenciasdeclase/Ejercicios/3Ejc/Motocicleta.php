<?php

include_once 'Transporte.php';

class moto extends transporte{

    private $cilindraje;
    private $tipoMoto;

    public function __construct($marca, $modelo, $color, $cilindraje, $tipoMoto) {

        parent::__construct($marca, $modelo, $color);

        $this->cilindraje = $cilindraje;
        $this->tipoMoto = $tipoMoto;

    }

    function getCilindraje(){

        return $this->cilindraje;

    }

    function setCilindraje($cilindraje){

        return $this->cilindraje = $cilindraje;

    }

    function getTipoMoto(){

        return $this->tipoMoto;

    }

    function setTipoMoto($tipoMoto){

        return $this->tipoMoto = $tipoMoto;

    }

    function mostrarInfo(){
        return(
            "<h3>DATOS MOTOCICLETA</h3>"." <br>".
            "De marca ".$this->getMarca()."<br>".
            "Modelo ".$this->getModelo()."<br>".
            "Color ".$this->getColor()."<br>".
            "Cilindraje ".$this->cilindraje."<br>".
            "Tipo de moto ".$this->tipoMoto );
        }

}

?>