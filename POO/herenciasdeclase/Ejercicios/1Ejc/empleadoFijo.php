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

        $valorDia= $this->salario / (30);

        $result = $this->diasTrab * $valorDia;

        //return $result

        Echo "El salario es: ".$result."<br>";

    }


}

?>