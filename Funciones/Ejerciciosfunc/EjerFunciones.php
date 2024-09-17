<?php

//funcion para que recibe un entero como parametro y retorne su ultimo digito

function ultimoDigito($cant){

    //$digult=0;

    $digult=($cant % 10);

    //return $digult;

    echo"Ultimo digito del numero entero: ".$digult;
    
}



//función que permita ver cada uno de los caracteres uno debajo del otro de un texto (“HOLA MUNDO”) y muestre cuantos caracteres tiene.

function ejercdos($cant){

    $letra=strtolower($cant);

    $letra=str_split($cant);

    $cont=0;

    foreach($letra as $i){

        echo "$i<br>";

        $cont++;

    }

    echo "<br>";

    echo"La palabra ingresada tiene: $cont caracteres";

}

//función que permita ver cada uno de los caracteres de un texto (“HOLA MUNDO”) y muestre cuantas vocales tiene.

function ejerctres($cant){

    $cant=strtolower($cant); //convierte mayusculas a minusculas

    $letra=str_split($cant); // convierte un string a un array

    $cont=0;

    foreach($letra as $i){

        echo "$i<br>";

        if($i == "a" || $i == "e" || $i == "i" || $i == "o" || $i == "u"){

            $cont++;

        }

    }

    echo "<br>";

    echo"La palabra ingresada tiene: $cont vocales";

}



//función que permita ver si una palabra que digite un usuario es palíndroma.

function ejercuatro($cant){

    $cant=strtolower($cant); //convierte mayusculas a minusculas

    $palder=str_split($cant); // convierte un string a un array

    $palrev= array_reverse($palder); // array_reverse — Devuelve un array con los elementos en orden inverso

    echo "<br>";

        if($palder == $palrev){

            echo"La palabra ingresada es: palíndroma";

        }else{
            echo"La palabra ingresada no es: palíndroma";
        }

}



//función que reciba como parámetros dos números enteros y retorne 1 si el primer número es múltiplo del segundo y 0 si no.

function ejercquinto($num1, $num2){ // 15   60

    //Echo"$num1<br>";

    //Echo"$num2<br>";

    if($num2 % $num1 == 0){

        //echo"1<br>";

        return true;

    }else{

        //echo"0<br>";

        return false;
    }

}


?>