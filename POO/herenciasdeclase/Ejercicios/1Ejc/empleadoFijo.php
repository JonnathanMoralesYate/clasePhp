<?php

include_once 'empleadoe.php';

class empleadoFijo extends empleado{

    private $diasTrab;

    public function __construct($nomEmplea, $salario, $diasTrab){

        parent::__construct($nomEmplea, $salario);

        $this-> diasTrab = $diasTrab;
    }

    function getDiasTrab(){

        return $this->diasTrab;

    }

    function setDiasTrab($diasTrab){

        return $this->diasTrab = $diasTrab;

    }

    function salarioF(){

        $valorDia= $this->getSalario() /
         30;

        $result = $this->diasTrab * $valorDia;

        Echo "El Empleado ".$this->getNomEmplea(). " tiene un salario de ".$result." COP"."  por haber trabajado un total de ".$this->getDiasTrab()." dias";

    }


}

?>