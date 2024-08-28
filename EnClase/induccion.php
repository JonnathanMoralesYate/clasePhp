<?php
//ver la version que esta trabajando en php
//phpinfo();


echo"Hola Mundo<br>";
echo"<h1>Hola Mundo</h1>";

//Variables
$nom='Jonna';
$edad= 35;
$statura= 1.77;
$buleano= true;

echo"El Dato es: ".$nom."<br>";
echo"El Dato es: ".$edad."<br>";
echo"El Dato es: ".$statura."<br>";
echo"El Dato es: ".$buleano."<br>";
echo"El Dato es: "."<h1>".$statura."</h1>";

//gettype mustra tipo de variable
echo gettype($buleano)."<br>";
echo gettype($nom)."<br>";
echo gettype($edad)."<br>";
echo gettype($statura)."<br>";

//constantes
define("IVA",0.19);
echo"El valor de Iva: ".IVA."<br>";

//Operaciones
$n1=5;
$n2=4;

//suma
$suma=$n1+$n2;
echo"La suma es: ".$suma."<br>";

//resta
echo"La resta es: ".($n1-$n2)."<br>";







?>