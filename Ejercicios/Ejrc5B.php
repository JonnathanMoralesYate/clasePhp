<?php
// 5A. Crear una calculadora básica con la opción MATCH.

$num1=$_POST['num1'];
$num2=$_POST['num2'];
$opcion=$_POST['opcion'];

$respuesta=match ($opcion) {
    "+" => $num1 + $num2 ,
    "-" => $num1 - $num2 ,
    "*" => $num1 * $num2 ,
    "/" => $num1 / $num2 ,
};

echo"El Resultado es: ".$respuesta;

?>