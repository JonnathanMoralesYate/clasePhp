<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones</title>
</head>
<body>

<h2>5.	Construir una función que reciba como parámetros dos números enteros y retorne 1 si el primer número es múltiplo del segundo y 0 si no.</h2>
<br>
<br>

<form action="" method="POST">

    <label for="num1" >Digite un nuemero entero</label>
    <Input type="number" name="num1" id="cant required">
    <br>
    <br>
    <label for="num2" >Digite un numero entero</label>
    <Input type="number" name="num2" id="cant required">
    <br>
    <br>
    <Input type="submit" value="Enviar">

</form>

<br>
<br>

<?php

require_once "EjerFunciones.php"; // se conecta con el archivo php donde tiene las funciones y procedimiento

if(isset($_POST['num1']) && isset($_POST['num2'])){

    $num1=$_POST['num1'];

    $num2=$_POST['num2'];

    Echo"$num1<br>";

    Echo"<br>$num2<br>";

    ejercquinto($num1, $num2);

    if(ejercquinto($num1, $num2) == true){

        echo"<br>1";
    }else{
        echo"<br>0";
    }

}


?>
    
</body>
</html>