<?php

class banco{

    private $numCuenta;
    private $clave;
    private $monto;

    public function __construc($numCuenta, $clave,$monto){

        $this->numCuenta=$numCuenta;
        $this->clave=$clave;
        $this->monto=$monto;

    }

    public function setNumCuenta(){
        return $this->NumCuenta;
    }

    public function getNumCuenta($numCuenta){
        $this->numCuenta=$numCuenta;
    }

    public function setClave(){
        return $this->clave;
    }

    public function getClave($clave){
        $this->clave=$clave;
    }

    public function setMonto(){
        return $this->monto;
    }

    public function getMonto($monto){
        $this->monto=$monto;
    }

    public function Depositar(){

    }

    public function Retirar(){

    }

    public function

}




?>

