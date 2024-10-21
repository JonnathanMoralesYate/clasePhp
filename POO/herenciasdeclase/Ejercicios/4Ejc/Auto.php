<?php

require_once 'Automovil.php';

class auto extends vehiculo{

    private $tipoTransmision;
    

    public function __construc($modelo, $marca, $tipoCombustible, $numeroLlantas, $numeroPuestos, $carga, $duracion, $tipoTransmision){

        parent::__construc($modelo, $marca, $tipoCombustible, $numeroLlantas, $numeroPuestos, $carga, $duracion);

        $this->tipoTransmision=$tipoTransmision;
        

    }

    public function setTipoTransmision(){
        return $this->tipoTransmision;
    }
    
    public function getTipoTransmision($tipoTransmision){
        return $this->tipoTransmision=$tipoTransmision;
    }
    
    
    public function mostrarInf() {
        return (
            "<h2>Informacion Auto</h2>".
            "Modelo". $this->setModelo()."<br>".
            "Marca". $this->setMarca()."<br>".
            "Tipo de combustible". $this->setTipoCombustible()."<br>".
            "Numero de Lantas". $this->setNumeroLlantas()."<br>".
            "Numero de Puestos". $this->setNumeroPuestos()."<br>".
            "Numero de Lantas $this->tipoTransmision <br>"
        );
}

}



?>