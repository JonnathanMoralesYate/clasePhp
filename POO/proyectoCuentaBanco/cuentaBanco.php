<?php

class banco{

    private $cuenta;

    public function __construc($saldo = 100000){

        $this->cuenta=$saldo;

    }

    public function setMonto(){

        return $this->cuenta;

    }

    public function getMonto($cuenta){

        $this->cuenta=$cuenta;

    }

    public function Depositar($monto){

        if($monto > 0){

            $this->cuenta += $monto;

            echo "Operacion Exitosa"."<br>"."Deposito: ".$monto."<br>".$this->cuenta;

        }else{

            echo "No se puedo realizar esta operacion";

        }

    }

    public function Retirar($monto){

        if($monto > 0 && $monto <= 100){

            $this->cuenta -= $monto;

            echo "Operacion Exitosa"."<br>"."Retiro:".$monto;

        }else{

            echo "Saldo Insuficiente";

        }

    }

    public function ConsultaSaldo(){

        return $this->cuenta;

    }

}




?>

