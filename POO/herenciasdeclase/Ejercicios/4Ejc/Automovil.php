<?php

class vehiculo{

    private $modelo;
    private $marca;
    private $tipoCombustible;
    private $numeroLlantas;
    private $numeroPuestos;
    private $carga;
    private $duracion;


public function __construc($modelo, $marca, $tipoCombustible, $numeroLlantas, $numeroPuestos, $carga, $duracion){
    $this->modelo=$modelo;
    $this->marca=$marca;
    $this->tipoCombustible=$tipoCombustible;
    $this->numeroLlantas=$numeroLlantas;
    $this->numeroPuestos=$numeroPuestos;
    $this->carga=$carga;
    $this->duracion=$duracion;

}

public function setModelo(){
    return $this->modelo;
}

public function getModelo($modelo){
    return $this->modelo=$modelo;
}

public function setMarca(){
    return $this->marca;
}

public function getMarca($marca){
    return $this->marca=$marca;
}

public function setTipoCombustible(){
    return $this->tipoCombustible;
}

public function getTipoCombustible($tipoCombustible){
    return $this->tipoCombustible=$tipoCombustible;
}

public function setNumeroLlantas(){
    return $this->numeroLlantas;
}

public function getNumeroLlantas($numeroLlantas){
    return $this->numeroLlantas=$numeroLlantas;
}

public function setNumeroPuestos(){
    return $this->numeroPuestos;
}

public function getNumeroPuestos($numeroPuestos){
    return $this->numeroPuestos=$numeroPuestos;
}

public function setCarga(){
    return $this->carga;
}

public function getCarga($carga){
    return $this->carga=$carga;
}

public function setDuracion(){
    return $this->duracion;
}

public function getDuracion($duracion){
    return $this->duracion=$duracion;
}


public function mostrarInf(){
    return(
        "<h2>Informacion General</h2>".
        "Modelo $this->modelo <br>".
        "Marca $this->marca <br>".
        "Tipo de combustible $this->tipoCombustible <br>".
        "Numero de Lantas $this->numeroLlantas <br>".
        "Numero de Lantas $this->numeroPuestos <br>".
        "Carga $this->carga <br>".
        "Duracion $this->duracion"
    );
    }

}
?>