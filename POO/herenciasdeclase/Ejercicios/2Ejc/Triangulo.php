<?php

include_once 'AreaFigura.php';

class triangulo extends figuraGeom{

    public function __construct($ladoA, $ladoB){

        parent::__construct($ladoA, $ladoB);

    }

    function AreaTriangulo(){

        $area = $this->getLadoA() * $this->getLadoB() * 0.5;
        
        echo "El area del triangulo es: ".$area." m2";
    }

}

?>