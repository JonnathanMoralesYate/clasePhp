<?php

class personaje{

    private $nombre;
    private $fechaNacim;

    public function __construct($nombre, $fechaNacim){

    $this->nombre=$nombre;
    $this->fechaNacim=$fechaNacim;

    }

    public function setNombre(){
       return $this->nombre;
    }

    public function getNombre(){

        return $this->nombre=$nombre;

    }

    public function mostrar(){
        return(
            "Nombre del Personaje:  $this->nombre <br>".
            "Fecha Nacimiento: $this->fechaNacim";
        )
    }

}


?>