<?php

class Empleado{

    private $nombrEmpl;
    private $salario;
    private $nombrProv;
    private $compra;

    public function __construc($nombrEmpl, $salario, $nombrProv, $compra){

        $this->nombrEmpl=$nombrEmpl;
        $this->salario=$salario;
        $this->nombrProv=$nombrProv;
        $this->compra=$compra;

    }

    public function getNombr(){
        return $this->nombr;
    }

    public function setNombr($nombr){
        return $this->nombr=$nombr;
    }

    public function getSalario(){
        return $this->nombr;
    }

    public function setSalario($salario){
        return $this->salario=$salario;
    }

    public function getNomProv(){
        return $this->nombrProv;
    }

    public function setNomProv($nombrProv){
        return $this->nombrProv=$nombrProv;
    }

    public function getCompra(){
        return $this->compra;
    }

    public function setCompra($compra){
        return $this->compra=$compra;
    }

    public function empleadoS(){

        if($this->salario <= 2000000){

            $compensacion = ($this->salario)*(0.10);

            $total= $this->salario + $compensacion;
             
            return (
                "La compensacion es: ".$compensacion."<br>".
                "El Sueldo Total es: ".$total."<br>"
            ); 

        }else{

            return(
                "El empleado $this->nombrEmpl <br> Tiene un Salario de: $this->salario"
            );

        }

    }

    public function ProveedorC(){

        if($this->compra > 500000){

            $descuento1= ($this->compra)*(0.15);

            return (
                "El descuento por la compra es: ".$descuento1
            );
        }else{

            $descuento2= ($this->compra)*(0.05);

            return (
                "El descuento por la compra es: ".$descuento2;
            )

        } 
    }
    

}


?>