<?php

require_once 'empleadoe.php';
require_once 'empleadoFijo.php';
require_once 'empleadoPorHora.php';

$datEmpleFijo = new empleadoFijo("Rico", 100, 15);

echo "El Empleado fijo nombre es: ".$datEmpleFijo->getNomEmplea()."<br>". $datEmpleFijo->salarioF().'<br>';


$datEmplePorHora = new empleadoPorHora("Pobre", 100, 184);

echo "El nombre es: ".$datEmplePorHora->getNomEmplea()."<br>". $datEmplePorHora->salarioH().'<br>';


?>