<?php

class Persona{

    private $nom;
    private $edad;

    public function __construct($nom, $edad){
        $this->nom=$nom;
        $this->edad=$edad;
    }


    // metodo apartir de version 8 en php

    // public function __construct(

    //     private $nom,
    //     private $edad;

    // ){}

    function getNom(){

        return $this->nom;

    } 

    function setNom($nom){

        return $this->nom=$nom;

    }

    function getEdad(){

        return $this->edad;

    } 

    function setEdad($edad){

        return $this->edad=$edad;

    }

    function mostrar(){

        echo'El nombre es: '.$this->nom." , ".'La edad es: '.$this->edad;
    }

}

?>