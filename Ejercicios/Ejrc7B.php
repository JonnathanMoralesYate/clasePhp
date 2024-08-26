<?php
// 7. Crea un sistema con MATCH que, basado en una puntuación entre 0 y 100, asigne
// una calificación:
// • De 90 a 100: "A"
// • De 80 a 89: "B"
// • De 70 a 79: "C"
// • De 60 a 69: "D"
// • Menor a 60: "F"

$num1=$_POST["num1"];

$respuesta=match (true) {
    $num1>=90 && $num1<=100 => "A" ,
    $num1>=80 && $num1<=89 => "B" ,
    $num1>70 && $num1<=79 => "C" ,
    $num1>=60 && $num1<=69 => "D" ,
    $num1>0 && $num1<60 => "F" ,
    default => "Digite de nuevo la puntuacion "."Entre 0 y 100",
};

echo"Nivel de Acceso: ".$respuesta;


?>