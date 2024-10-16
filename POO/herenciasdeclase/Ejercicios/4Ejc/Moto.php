<?php

require_once 'Auto.php';

class motoclicleta extends auto{

    private $transmision;

    public function __construc($modelo, $marca, $tipoCombustible, $numeroLlantas, $numeroPuestos, $transmision) {
        parent :: __construc($modelo, $marca, $tipoCombustible, $numeroLlantas, $numeroPuestos);
        $this->transmision = $transmision;
    }

    public function setTransmision(){
        return $this->transmision;
    }
    
    public function getTransmision($transmision){
        return $this->transmision = $transmision;
    }

    public function mostrarInf() {
        return (
            "<h2>Informacion Moto</h2>".
            "Modelo". $this->setModelo()."<br>".
            "Marca". $this->setMarca()."<br>".
            "Tipo de combustible". $this->setTipoCombustible()."<br>".
            "Numero de Lantas". $this->setNumeroLlantas()."<br>".
            "Tipo de transmision $this->transmision"
        );
    }
    
}

?>