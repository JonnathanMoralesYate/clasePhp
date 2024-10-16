<?php

require_once 'Moto.php';

class hibrido extends motoclicleta{

    private $carga;
    private $duracion;

    public function __construc($modelo, $marca, $tipoCombustible, $numeroLlantas, $numeroPuestos, $transmision, $carga, $duracion){

        parent :: __construc($modelo, $marca, $tipoCombustible, $numeroLlantas, $numeroPuestos, $transmision);
        $this->carga = $carga;
        $this->duracion = $duracion;

    }

    public function setCarga(){
        return $this->carga;
    }
    
    public function getCarga($carga){
        return $this->carga = $carga;
    }

    public function setDuracion(){
        return $this->duracion;
    }
    
    public function getDuracion($duracion){
        return $this->duracion = $duracion;
    }

    public function mostrarInf() {
        return (
            "<h2>Informacion Hibridos</h2>".
            "Modelo". $this->setModelo()."<br>".
            "Marca". $this->setMarca()."<br>".
            "Tipo de combustible". $this->setTipoCombustible()."<br>".
            "Numero de Lantas". $this->setNumeroLlantas()."<br>".
            "Tipo de transmision". $this->setTransmision()."<br>".
            "Carga $this->carga <br>".
            "Duracion $this->duracion;"
        );
    }




}




?>