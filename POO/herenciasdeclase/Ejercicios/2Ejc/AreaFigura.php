<?php

class figuraGeom{

    private $ladoA;
    private $ladoB;

    public function __construct($ladoA, $ladoB){

        $this->ladoA = $ladoA;
        $this->ladoB = $ladoB;
    }

    function getLadoA(){

        return $this->ladoA;

    }

    function setLadoA($ladoA){

        return $this->ladoA = $ladoA;

    }

    function getLadoB(){

        return $this->ladoB;

    }

    function setLadoB($ladoB){

        return $this->ladoB = $ladoB;

    }
    
        
    }



?>