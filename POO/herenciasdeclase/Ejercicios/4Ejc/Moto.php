<?php

require_once 'Auto.php';

class motoclicleta extends auto{

    private $gama;

    public function __construc($modelo, $marca, $tipoCombustible, $numeroLlantas, $numeroPuestos, $carga, $duracion, $tipoTransmision, $gama) {
        
        parent::__construc($modelo, $marca, $tipoCombustible, $numeroLlantas, $numeroPuestos, $carga, $duracion, $tipoTransmision);

        $this->gama=$gama;
    }

    public function setGama(){
        return $this->gama;
    }
    
    public function getGama($gama){
        return $this->gama=$gama;
    }

    public function mostrarInf() {
        return (
            "<h2>Informacion Moto</h2>".
            "Modelo". $this->setModelo()."<br>".
            "Marca". $this->setMarca()."<br>".
            "Tipo de combustible". $this->setTipoCombustible()."<br>".
            "Numero de Lantas". $this->setNumeroLlantas()."<br>".
            "Numero de Puestos". $this->setNumeroPuestos()."<br>".
            "Tipo de Transmision". $this->setTipoTransmision()."<br>".
            "Tipo de transmision $this->gama"
        );
    }
    
}

?>