<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones</title>
</head>
<body>

<h2>Construir una funcion que reciba como parametro un entero y retorne su ultimo digito</h2>
<br>
<br>

<form action="" method="POST">

    <label for="cant" >Digite un numero entero</label>
    <Input type="number" name="cant" id="cant required">
    <Input type="submit" value="Enviar">

</form>

<br>
<br>

<?php

require_once "EjerFunciones.php"; // se conecta con el archivo php donde tiene las funciones y procedimiento

if(isset($_POST['cant'])){

    $cant=$_POST['cant'];

    ultimoDigito($cant);

    //echo"Ultimo digito del numero entero: ".ultimoDigito($cant);   

}


?>
    
</body>
</html>