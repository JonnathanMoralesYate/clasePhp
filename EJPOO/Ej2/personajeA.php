<?php

enum Armas: string{
    case Acha="acha";
    case Espadas="espadas";
    case Dagas="Dagas";
}

enum Alcance: string{
    case Corto="corto";
    case Mediano="mediano";
    case Largo="largo";
}

class personajeZ{

    private $nombre;
    private $fechaNacim;

    public function __construct($nombre, $fechaNacim){

    $this->nombre=$nombre;
    $this->fechaNacim=$fechaNacim;

    }

    public function getNombre(){

        return $this->nombre;

    }

    public function setNombre($nombre){

        return $this->nombre=$nombre;

    }

    public function getFechaNacim(){

        return $this->fechaNacim;
        
    }

    public function setFechaNacim($fechaNacim){

        return $this->fechaNacim=$fechaNacim;

    }

    public function mostrar(){
        return
        ("Nombre del Personaje:  $this->nombre <br>".
        "Fecha Nacimiento: $this->fechaNacim"
        );
    }

}


?>