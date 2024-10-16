<?php

require_once 'Automovil.php';

class auto extends vehiculo{

    private $numeroLlantas;
    private $numeroPuestos;

    public function __construc($modelo, $marca, $tipoCombustible, $numeroLlantas, $numeroPuestos){

        parent :: __construc($modelo, $marca, $tipoCombustible);
        $this->numeroLlantas = $numeroLlantas;
        $this->numeroPuestos = $numeroPuestos;

    }

    public function setNumeroLlantas(){
        return $this->numeroLlantas;
    }
    
    public function getNumeroLlantas($numeroLlantas){
        return $this->numeroLlantas = $numeroLlantas;
    }
    
    public function setNumeroPuestos(){
        return $this->numeroPuestos;
    }
    
    public function getNumeroPuestos($numeroPuestos){
        return $this->numeroPuestos = $numeroPuestos;
    }
    
    public mostrarInf(){
        return(
            "<h2>Informacion General</h2>".
            "Modelo". $this->setModelo()."<br>".
            "Marca". $this->setMarca()."<br>".
            "Tipo de combustible". $this->setTipoCombustible()."<br>".
            "Numero de Lantas $this->numeroLlantas <br>".
        )
}

}



?>