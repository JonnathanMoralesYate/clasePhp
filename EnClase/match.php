<?php

//Diferencia entre mayuscula y minusculas

$comida="Yogurth";

$respuesta=match ($comida) {
    "Carne" => "Proteina" ,
    "Yogurth" => "Lacteos" ,
    "Manzana" => "Fruta",
     default => "No existe",
};

echo"Es: ".$respuesta;
?>