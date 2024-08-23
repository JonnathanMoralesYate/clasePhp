<?php
// 4. Leer tres números enteros y determina si el penúltimo dígito de los tres números es igual.

$num1=$_POST['num1'];
$num2=$_POST['num2'];
$num3=$_POST['num3'];
$penulNum1;
$penulNum2;
$penulNum3;

$arr = str_split((string)$num1); // se cambia el numero a un array String

$penulNum1 = $arr[sizeof($arr)-2]; // Se asigna la valor a la penultima posicion  del array 

echo"$penulNum1"."<br>";

$arr = str_split((string)$num2); // se cambia el numero a un array String

$penulNum2 = $arr[sizeof($arr)-2]; // Se asigna la valor a la penultima posicion  del array 

echo"$penulNum2"."<br>";

$arr = str_split((string)$num3); // se cambia el numero a un array String

$penulNum3 = $arr[sizeof($arr)-2]; // Se asigna la valor a la penultima posicion  del array 

echo"$penulNum3"."<br>";

if($penulNum1 == $penulNum2 && $penulNum1 == $penulNum3){ //Compara si los tres numeros digitados tienen el penultimo digito igual

    echo"Los tres numero digitados, tienen el penultimo Digito igual";

}else if($penulNum2 == $penulNum3){ //Compara si el numero 2 y el 3 digitados tienen el penultimo digito igual

    echo"El numero dos y el tres, tienen el penultimo Digito igual";

}else if($penulNum1 == $penulNum3){ //Compara si el numero 1 y el 3 digitados tienen el penultimo digito igual

    echo"El numero uno y el tres, tienen el penultimo Digito igual";

}else{ //Impre que los tres numeros digitados no tienen el penultimo digito igual

    echo"Los tres numero digitados, no tienen el penultimo Digito igual"; 

}

?>