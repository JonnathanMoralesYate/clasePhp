<?php

include_once 'cliente.php';

class nieto extends cliente{

    private $codNieto;

    public function __construct($nom, $numDoc, $estatura, $codClient, $codNieto){

        parent::__construct($nom, $numDoc, $estatura, $codClient);

        $this->codNieto = $codNieto;
    }

    function getCodNieto(){

        return $this->codNieto;

    }

    function setCodNieto($codNieto){

        return $this->codNieto = $codNieto;

    }


}






?>