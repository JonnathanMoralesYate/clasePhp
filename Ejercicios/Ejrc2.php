<?php
// 2. Leer un número entero de 2 dígitos y si terminar en 1 mostrar en pantalla su primer dígito, si
// termina en 2 mostrar en pantalla la suma de sus dígitos y si termina en 3 mostrar en pantalla el
// producto de sus dos dígitos.


$num1=$_POST['num1'];
$suma=0;
$produc=0;

if($num1 % 10 == 1){//Compara si el resultado termina en 1 cuando es de dos cifras

    echo "El Primer digito del Numero Ingresado es: ".(int)($num1/10); //(int) combierte o muestra el numero entero de la operacion

    }else if($num1 % 10 == 2){//Compara si el resultado termina en 2 cuando es de dos cifras

        while ($num1 != 0) { //suma los digitos del numero
            $suma += $num1 % 10;
            $num1 = intval($num1 / 10);
        }

        echo "La suma de sus digitos es: ".$suma."<br>";
    
        }else if($num1 % 10 == 3){//Compara si el resultado termina en 3 cuando es de dos cifras

            $primDig;
            $ultDig;

            $arr = str_split((string)$num1); // se cambia el numero a un array String
      
            $primDig = $arr[0];             // Se asigna la valor a la posicion 0 del array que va ser el primer digito
            $ultDig = $arr[sizeof($arr)-1]; // Se asigna la valor a la posicion final del array que va ser el segundo digito

            $produc=$primDig*$ultDig;

            echo "El Producto de sus digitos es: ".$produc;
        
            }





?>