<?php
// 1.	Escribe un programa en PHP que determina todos los números primos dentro de un rango de números proporcionado por el usuario. 
// Utiliza un bucle for para iterar sobre el rango y otro bucle For anidado para verificar si un número es primo.

// Ejemplo de salida: Si el usuario ingresa el rango de 10 a 30, el programa debe mostrar los números primos: 11, 13, 17, 19, 23, 29.

$num1=$_POST['num1'];
$num2=$_POST['num2'];


for($i=$num1;$i<=$num2;$i++){ //Un bucle que itera desde el número de inicio hasta el número final.

    if($i>1){ //Los números primos son mayores que 1, así que se verifica que $i sea mayor que 1 antes de comprobar si es primo.
        $numPrimo=true; //Asume inicialmente que $ni es primo.
    }
    
     for($j=2;$j <= sqrt($i);$j++){ //Un bucle para verificar los posibles divisores de $i. Solo es necesario verificar hasta la raíz cuadrada de $i porque un divisor más grande implicaría que el otro divisor es más pequeño que la raíz cuadrada.
        if($i % $j == 0){ //Verifica si $i es divisible por $j. Si es divisible, no es primo
            $numPrimo=false; //Marca $i como no primo si se encuentra un divisor
            break; //Sale del bucle de verificación de divisores si se encuentra uno
        }
     }

     if($numPrimo){ //Si $i sigue siendo primo, se imprime
        echo"$i"."<br>";
     }

    }


?>