<?php

include_once 'Transporte.php';

class bicicleta extends transporte{

    private $tipoFreno;
    private $tipoBici;

    public function __construct($marca, $modelo, $color, $tipoFreno, $tipoBici) {

        parent::__construct($marca, $modelo, $color);

        $this->tipoFreno = $tipoFreno;
        $this->tipoBici = $tipoBici;

    }

    function getTipoFreno(){

        return $this->tipoFreno;

    }

    function setTipoFreno($tipoFreno){

        return $this->tipoFreno = $tipoFreno;

    }

    function getTipoBici(){

        return $this->tipoBici;

    }

    function setTipoBici($tipoBici){

        return $this->tipoBici = $tipoBici;

    }

    function mostrarInfo(){
        return(
            "<h3>DATOS BICICLETA</h3>"." <br>".
            "Marca ".$this->getMarca()."<br>".
            "Modelo ".$this->getModelo()."<br>".
            "Color ".$this->getColor()."<br>".
            "Tipo de freno ".$this->tipoFreno."<br>".
            "Tipo de bicicleta ".$this->tipoBici );
        }

}


?>