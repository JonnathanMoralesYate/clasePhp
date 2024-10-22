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

    public function setNombre(){

        return $this->nombre;

    }

    public function getNombre($nombre){

        return $this->nombre=$nombre;

    }

    public function setFechaNacim(){

        return $this->fechaNacim;
        
    }

    public function getFechaNacim($fechaNacim){

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