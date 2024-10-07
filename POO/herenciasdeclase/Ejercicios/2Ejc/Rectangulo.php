<?php

include_once 'AreaFigura.php';

class rectangulo extends figuraGeom{

    public function __construct($ladoA, $ladoB){

        parent::__construct($ladoA, $ladoB);

    }

    function AreaRectangulo(){

        $area = $this->getLadoA() * $this->getLadoB();
        
        echo "El area del rectangulo es: ".$area." m2";
    }

}

?>