<?php

include_once 'AreaFigura.php';

class cuadrado extends figuraGeom{

    public function __construct($ladoA, $ladoB){

        parent::__construct($ladoA, $ladoB);

    }

    function AreaCuadrado(){

        $area = $this->getLadoA() * $this->getLadoB();
        
        echo "El area del cuadrado es: ".$area." m2";
    }

}

?>