<?php

$num1=$_POST['num1'];
$num2=$_POST['num2'];
$opcion=$_POST['opcion'];
$resultado=0;

if($opcion == "+"){

    $resultado=$num1+$num2;

}else if($opcion == "-"){

    $resultado=$num1-$num2;

}else if($opcion == "*"){

    $resultado=$num1*$num2;

}else{

    $resultado=$num1/$num2;

}

echo "<h2> El Resultado es: ".$resultado."</h2>";

?>