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

    public function setArma(){
        return $this->arma;
    }

    public function getArma($arma){
        return $this->arma=$arma;
    }

    public function setAlcance($alcance){
        return $this->alcance=$alcance;
    }

    public function getAlcance($alcance){
        return $this->alcance=$alcance;
    }
    
    public function mostrar(){
        return(
            "Nombre del Personaje: ".$this->setNombre()."<br>".
            "Fecha Nacimiento: ".$this->setFechaNacim()."<br>".
            "Clase: Guerrero <br>".
            "Arma:  $this->arma <br>".
            "Alcance: $this->alcance"
        );
    }






}


?>