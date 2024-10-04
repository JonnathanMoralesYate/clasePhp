<?php

require_once 'empleadoe.php';
require_once 'empleadoFijo.php';
require_once 'empleadoPorHora.php';

$datEmpleFijo = new empleadoFijo("Rico", 100, 30);

echo $datEmpleFijo->salarioF().'<br>';


$datEmplePorHora = new empleadoPorHora("Pobre", 100, 184);

echo $datEmplePorHora->salarioH().'<br>';






?>