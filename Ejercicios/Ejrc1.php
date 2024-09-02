<?php

// 1. Leer dos números enteros y si la diferencia entre los dos números es par mostrar en pantalla la suma de los dígitos de los números,
// si dicha diferencia es un número primo menor que 10 entonces mostrar en pantalla el producto de los dos números y 
//si la diferencia entre ellos terminar en 9 mostrar en pantalla todos los dígitos por separado.

$num1=$_POST['num1'];
$num2=$_POST['num2'];
$reslt=0;
$cont=0;
$i=1;
$produc=0;

$reslt=$num1-$num2;

echo "Numero uno es:". $num1."<br>";
echo "Numero dos es:". $num2."<br>";

    if($reslt<0){
        echo "Digite el numero uno mayor que el numero dos";
    }

    else if ($reslt % 2 == 0) { //Comprueba el resultado de la diferencia de numero uno y numero dos, es par

        echo "diferencia es par <br>";
        echo "$reslt <br>";

        $sumaNum1 = 0;
        $sumaNum2 = 0;

    while ($num1 != 0) { //suma los digitos del numero uno
        $sumaNum1 += $num1 % 10;
        $num1 = intval($num1 / 10);
    }

    while ($num2 != 0) { //suma los digitos del numero dos
        $sumaNum2 += $num2 % 10;
        $num2 = intval($num2 / 10);
    }

    echo "La suma de los dígitos del numero uno es:". $sumaNum1."<br>";
    echo "La suma de los dígitos del numero dos es:". $sumaNum2." <br>";
        
    }

    while($i<=$reslt){//Comprueba que el resultado de la diferencia sea primo

        if($reslt % $i == 0){

            $cont++;

        }
        $i++;

    }

    if($cont == 2){

        echo "Resultado es numero Primo <br>";
        echo "$reslt <br>";

        if($reslt<10){ //Comprueba que el primo sea menor a 10 para mostrar el producto de numero uno y numero dos

            $produc=$num1*$num2;
            echo "El producto de numero uno y numero dos es: ". $produc."<br>";

        }
    }

    if($reslt<10 && $reslt == 9){//Compara el resultado si termina en 9 cuando es de una sola cifra
        echo "Los Digitos son: ". $reslt."<br>";

    }else if($reslt>10){

        if($reslt % 10 == 9){//Compara si el resultado termina en 9 cuando es mayor o igual a dos cifras

        echo "Digitos del Numero 1: <br>";
            $digitosnum1 = str_split($num1);//Imprime los digitos del numero 1
    foreach ($digitosnum1 as $digitonum1) 
        echo $digitonum1 . " ";
            echo"<br>";
        echo "Digitos del Numero 2: <br>";
        $digitosnum2 = str_split($num2);//Imprime los digitos del numero 2
    foreach ($digitosnum2 as $digitonum2) 
        echo $digitonum2 . " ";

        }

    }
    
?>