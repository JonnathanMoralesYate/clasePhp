<?php

include_once 'empleadoe.php';

class empleadoPorHora extends empleado{

    private $horasTrab;

    public function __construct($nomEmplea, $salario,$horasTrab){

        parent::__construct($nomEmplea, $salario);

        $this-> horasTrab = $horasTrab;
    }

    function getHorasTrab(){

        return $this->horasTrab;

    }

    function setHorasTrab($horasTrab){

        return $this->horasTrab = $horasTrab;

    }

    function salarioH(){

        $valorHora = $this->getSalario() / 184;

       $result = intval( $this->horasTrab) * $valorHora;

        Echo "El Empleado ".$this->getNomEmplea(). " tiene un salario de ".$result." COP"." por haber trabajado un total de ".$this->getHorasTrab()." horas";

    }

}

?>