<?php

include_once 'Transporte.php';
include_once 'Automovil.php';
include_once 'Motocicleta.php';
include_once 'Bicicleta.php';

$datAuto = new automovil("Mercedez Benz", "Clase GLA", "Gris", "Gasolina", "Deportivo");

echo $datAuto->mostrarInfo().'<br>';

$datMoto = new moto("Yamaha", "MT", "Azul", "900", "Sport");

echo $datMoto->mostrarInfo().'<br>';

$datBici = new bicicleta("Trek", "Mtb Marlin 7", "Blanco", "Disco", "Montaña");

echo $datBici->mostrarInfo().'<br>';



?>