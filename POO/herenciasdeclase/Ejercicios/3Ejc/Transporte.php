<?php

class transporte{

    private $marca;
    private $modelo;
    private $color;

    public function __construct($marca, $modelo, $color) {

        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->color = $color;

    }

    function getMarca(){

        return $this->marca;

    }

    function setMarca($marca){

        return $this->marca = $marca;

    }

    function getModelo(){

        return $this->modelo;

    }

    function setModelo($modelo){

        return $this->modelo = $modelo;

    }

    function getColor(){

        return $this->color;

    }

    function setColor($color){

        return $this->color = $color;

    }

    function mostrarInfo(){
        return(
            " es de marca ".$this->marca."<br>".
            "modelo ".$this->modelo."<br>".
            "de color ".$this->color );
        }

}


?>