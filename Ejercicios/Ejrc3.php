<?php
// 3. Leer dos números enteros y si la diferencia entre los dos es menor o igual a 10 entonces mostrar
// en pantalla todos los enteros comprendidos entre el menor y el mayor de los números leídos.

$num1=$_POST['num1'];
$num2=$_POST['num2'];
$difer=0;
$i=$num2;

if($difer <= 10){
    
    do{
        $i++;
        echo "$i"."<br>";


    }while($i<$num1);

}

?>