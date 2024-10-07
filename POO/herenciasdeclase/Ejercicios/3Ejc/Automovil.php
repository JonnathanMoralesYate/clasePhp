<?php

include_once 'Transporte.php';

class automovil extends transporte{

    private $tipoCombustible;
    private $tipoAuto;

    public function __construct($marca, $modelo, $color, $tipoCombustible, $tipoAuto) {

        parent::__construct($marca, $modelo, $color);

        $this->tipoCombustible = $tipoCombustible;
        $this->tipoAuto = $tipoAuto;

    }

    function getTipoCombustible(){

        return $this->tipoCombustible;

    }

    function setTipoCombustible($tipoCombustible){

        return $this->tipoCombustible = $tipoCombustible;

    }

    function getTipoAuto(){

        return $this->tipoAuto;

    }

    function setTipoAuto($tipoAuto){

        return $this->tipoAuto = $tipoAuto;

    }

    function mostrarInfo(){
        return(
            "<h3>DATOS AUTOMOVIL</h3>"." <br>".
            "Es de marca ".$this->getMarca()."<br>".
            "Modelo ".$this->getModelo()."<br>".
            "Color ".$this->getColor()."<br>".
            "Tipo de combustible ".$this->tipoCombustible."<br>".
            "Tipo de auto ".$this->tipoAuto."<br>" );
        }

}



?>