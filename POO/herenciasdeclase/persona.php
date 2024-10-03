<?php

class persona{

    private $nom;
    private $numDoc;
    private $estatura;

    public function __construct($nom, $numDoc, $estatura){

        $this->nom=$nom;
        $this->numDoc=$numDoc;
        $this->estatura=$estatura;

    }

    function getNom(){

        return $this->nom;

    }

    function setNom($nom){

        return $this->nom = $nom;

    }

    function getNumDoc(){

        return $this->numDoc;

    }

    function setNumDoc($numDoc){

        return $this->numDoc = $numDoc;
        
    }

    function getEstatura(){

        return $this->estatura;

    }

    function setEstatura($estatura){

        return $this->estatura = $estatura;
        
    }

    function mostrar(){

        return(
            "<h2>DATOS PERSONALES</h2> <br>
            El nombre es: ".$this->nom."<br>
            El numero de documento es: ".$this->numDoc."<br>
            La estatura es: ".$this->estatura);
    }

}



?>