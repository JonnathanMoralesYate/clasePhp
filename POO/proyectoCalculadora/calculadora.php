<?php

class calculadora{

    private $num1;
    private $num2;

    public function __construct($num1, $num2){

        $this->num1=$num1;
        $this->num2=$num2;

    }


    function getNum1(){

        return $this->num1;

    } 

    function setNum1($num1){

        return $this->num1=$num1;

    }

    function getNum2(){

        return $this->num2;
    }

    function setNum2($num2){

        return $this->num2=$num2;

    }


    function suma(){

        $resul = $this->num1 + $this->num2;

        return $resul;

    }

    function resta(){

        $resul = $this->num1 - $this->num2;

        return $resul;
        
    }

    function division(){

        $resul = $this->num1 / $this->num2;

        return $resul;
        
    }

    function multiplicacion(){

        $resul = $this->num1 * $this->num2;

        return $resul;
        
    }



}



?>