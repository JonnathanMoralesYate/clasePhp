<?php

class Empleado5{

    private $nombrEmpl;
    private $salario;
    private $nombrProv;
    private $compra;

    public function __construct($nombrEmpl, $salario, $nombrProv, $compra){

        $this->nombrEmpl=$nombrEmpl;
        $this->salario=$salario;
        $this->nombrProv=$nombrProv;
        $this->compra=$compra;

    }

    public function getNombrEmpl(){
        return $this->nombrEmpl;
    }

    public function setNombrEmpl($nombrEmpl){
        return $this->nombrEmpl=$nombrEmpl;
    }

    public function getSalario(){
        return $this->salario;
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
                "El Sueldo Total es: ".$total." COP"."<br>"
            ); 

        }else{

            return(
                "El empleado $this->nombrEmpl <br> Tiene un Salario de: $this->salario COP <br>"
            );

        }

    }

    public function ProveedorC(){

        if($this->compra > 500000){

            $descuento1= $this->compra * 0.15;

            return (
                "El Proveedor es: $this->nombrProv, Obtuviste un descuento del 15% <br>".
                "El descuento por la compra es: ".$descuento1
            );
        }else{

            $descuento2= ($this->compra)*(0.05);

            return (
                "El Proveedor es: $this->nombrProv, Obtuviste un descuento del 5% <br>".
                "El descuento por la compra es: ".$descuento2
            );

        } 
    }
    

}


?>