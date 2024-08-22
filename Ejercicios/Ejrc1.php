<?php

// 1. Leer dos números enteros y si la diferencia entre los dos números es par mostrar en pantalla la suma de los dígitos de los números,
// si dicha diferencia es un número primo menor que 10 entonces mostrar en pantalla el producto de los dos números y 
//si la diferencia entre ellos terminar en 7 mostrar en pantalla todos los dígitos por separado.

$num1=$_POST['num1'];
$num2=$_POST['num2'];
$reslt=0;
$cont=0;

$reslt=$num1-$num2;

    if($reslt<0){
        echo "Digite el numero uno mayor que el numero dos";
    }

    else if ($reslt % 2 == 0) {
        echo "diferencia es par";
        $digits = str_split((string)$num1);
        foreach($digits as $digit) {
            $cont=$digit + $digit;
         echo $cont . " ";
    }
}
        

    // $digits = str_split((string)$num1);
    // for(i=0;i<$digits;i++){

    // }
    
    
?>