<?php

require_once 'personajeA.php';

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

class guerrero extends personajeZ{

    private $arma;
    private $alcance;

    public function __construc($nombre, $fechaNacim, $arma, $alcance){

        parent::__construc($nombre, $fechaNacim);

        $this->arma=$arma;
        $this->alcance=$alcance;

    }

    public function getArma(){
        return $this->arma;
    }

    public function setArma($arma){
        return $this->arma=$arma;
    }

    public function getAlcance(){
        return $this->alcance;
    }

    public function setAlcance($alcance){
        return $this->alcance=$alcance;
    }
g
    public function mostrar(){
        return(
            "Nombre del Personaje: ".$this->getNombre()."<br>".
            "Fecha Nacimiento: ".$this->getFechaNacim()."<br>".
            "Clase: Guerrero <br>".
            "Arma:  $this->arma <br>".
            "Alcance: $this->alcance"
        );
    }






}


?>