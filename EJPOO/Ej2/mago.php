<?php

require_once 'personajeA.php';

enum PoderF: string{
    case LanzaFuego="fuegoL";
    case LanzaRoca="roca";
    case LanzaHielo="hielo";
}

enum Element: string{
    case Agua="agua";
    case Tierra="tierra";
    case Fuego="fuego";
    case Aire="aire";
}

class mago extends personajeZ{

    private $poder;
    private $elemento;

    public function __construc($nombre, $fechaNacim, $poder, $elemento){

        parent::__construc($nombre, $fechaNacim);

        $this->poder=$poder;
        $this->elemento=$elemento;
    }

    public function setPoder(){
        return $this->poder;
    }

    public function getPoder($poder){
        return $this->poder=$poder;
    }

    public function setElememto($elemento){
        return $this->elemento=$elemento;
    }

    public function getElemento($elemento){
        return $this->elemento=$elemento;
    }
    
    public function mostrar(){
        return(
            "Nombre del Personaje: ".$this->setNombre()."<br>".
            "Fecha Nacimiento: ".$this->setFechaNacim()."<br>".
            "Clase: Mago <br>".
            "Poder del Mago:  $this->poder <br>".
            "Elemento: $this->elemento"
        );
    }

}



?>