<?php
// 1.	Escribe un programa en PHP que determina todos los números primos dentro de un rango de números proporcionado por el usuario. 
// Utiliza un bucle for para iterar sobre el rango y otro bucle For anidado para verificar si un número es primo.

// Ejemplo de salida: Si el usuario ingresa el rango de 10 a 30, el programa debe mostrar los números primos: 11, 13, 17, 19, 23, 29.

$num1=$_POST['num1'];
$num2=$_POST['num2'];
$cont=0;


for($i=$num1+1;$i<$num2;$i++){

    $cont=0;
    
    for($j=1;$j <= $i;$j++){

        if($i % $j == 0){

            $cont++;
    
        }
    
    }
    
    if($cont == 2){
    
        echo "El numero Primo <br>";
        echo "$i <br>";

    }

}

?>