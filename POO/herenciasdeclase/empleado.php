<?php

include_once 'cliente.php';

class empleado extends persona{

    private $codEmplea;

    public function __construct($nom, $numDoc, $estatura, $codEmplea){

        parent::__construct($nom, $numDoc, $estatura);

        $this->codEmplea = $codEmplea;
    }

    function getCodEmplea(){

        return $this->codEmplea;

    }

    function setCodEmplea($codEmplea){

        return $this->codEmplea = $codEmplea;

    }

    function mostrar(){

        return(
            "<h2>DATOS EMPLEADO</h2> <br>
            El nombre del empleado es: ".$this->getNom()."<br>
            El numero de documento es: ".$this->codEmplea."<br>");
    }
}


?>