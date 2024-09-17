<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones</title>
</head>
<body>

<h2>3.	En PHP crear una función que permita ver cada uno de los caracteres de un texto (“HOLA MUNDO”) y muestre cuantas vocales tiene.</h2>
<br>
<br>

<form action="" method="POST">

    <label for="cant" >Digite una palabra</label>
    <Input type="text" name="cant" id="cant required">
    <Input type="submit" value="Enviar">

</form>

<br>
<br>

<?php

require_once "EjerFunciones.php"; // se conecta con el archivo php donde tiene las funciones y procedimiento

if(isset($_POST['cant'])){

    $cant=$_POST['cant'];

    ejerctres($cant);

}


?>
    
</body>
</html>