<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones</title>
</head>
<body>

<form action="" method="POST">

    <label for="cant" >Cuantos Input</label>
    <Input type="number" name="cant" id="cant required">
    <Input type="submit" value="Enviar">

</form>

<br>
<br>

<?php

require_once "funcion1.php"; // se conecta con el archivo php donde tiene las funciones y procedimiento

campos(); // llama la funcion

mostrar(); // llama la funcion


?>
    
</body>
</html>
