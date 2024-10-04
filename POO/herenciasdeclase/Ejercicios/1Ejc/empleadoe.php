<?php


class empleado{

    private $nomEmplea;
    private $salario;

    public function __construct($nomEmplea, $salario){

        $this->nomEmplea = $nomEmplea;
        $this->salario = $salario;
        
    }

    function getNomEmplea(){

        return $this->nomEmplea;

    }

    function setNodEmplea($nomEmplea){

        return $this->nomEmplea = $nomEmplea;

    }

    function getSalario(){

        return $this->salario;

    }

    function setSalario($salario){

        return $this->salario = $salario;

    }

    
}


?>