<?php

$arreglo1=array(1,2,3,4,5,6,7);

$arreglo=[1,2,3,4,5];

echo $arreglo[3]."<br>";


foreach($arreglo1 as $indice => $ValorIndice){ // 
        echo $indice. ":" . $ValorIndice. "<br>";
    }

    $edades = [
        "id" => 25,
        "nombre" => "Pablo",
        "direccion" => "Jordan",
    ];

    foreach($edades as $indic => $dato){  //asociativo
        echo "indice: $indic, Dato: $dato <br>";

    }

?>