<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form>

    <label for="num1" >Digite el primer numero</label>
    <Input type="number" name="num1" id="num1 required">
    <br>
    <br>

    <label for="num2" >Digite el segundo numero</label>
    <Input type="number" name="num2" id="num2 required">
    <br>
    <br>

    <select name="opcion" id="opcion">
            <option value="+">Suma</option>
            <option value="-">Resta</option>
            <option value="*">Multiplicacion</option>
            <option value="/">Division</option>
    </select>
    <br>
    <br>

    <Input type="submit" value="Enviar">

</form>


<?php 






//require_once 'calculadora.php';

//$resultado = new calculadora(9,3);

//echo'El valor del numero 1 es: '.$resultado->getNum1().'<br>';

//echo'El valor del numero 2 es: '.$resultado->getNum2().'<br>';

//echo $resultado->suma().'<br>';


//echo"La suma es: ".$resultado->suma()."<br>";

//echo"La resta es: ".$resultado->resta()."<br>";

//echo"La division es: ".$resultado->division(),"<br>";

//echo"La multiplicacion es: ".$resultado->multiplicacion()."<br>";

?> 




</body>
</html>