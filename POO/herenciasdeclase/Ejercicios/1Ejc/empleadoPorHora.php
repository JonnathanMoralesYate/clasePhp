<?php

include_once 'empleadoe.php';

class empleadoPorHora extends empleado{

    private $horasTrab;

    public function __construct($nomEmplea, $salario,$horasTrab){

        parent::__construct($nomEmplea, $salario);

        $this-> horasTrab = $horasTrab;
    }

    function getDiasTrab(){

        return $this->horasTrab;

    }

    function setDiasTrab($horasTrab){

        return $this->horasTrab = $horasTrab;

    }

    function salarioH(){

        $valorHora= $this->salario / (184);

        $result = $this->horasTrab * $valorHora;

        //return $result

        Echo "El salario es: ".$result."<br>";

    }

}

?>