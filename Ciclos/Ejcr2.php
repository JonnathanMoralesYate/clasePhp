<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../Ciclos/css/StyleEjcr2.css">
    <title></title>
</head>
<body>

<p>Ejercicio 2</p>
    <br>
    <form action="" method="POST">

        <label for="num1">Digite un Numero: </label>
        <input type="text" name="num1" id="num1">

        <button type="submit">Resultado</button>

    </form>
    <br>
    <br>
    <br>


<?php
// 2.	Pedirle al usuario que digite un número, si este es de 1 o 2 dígitos mostrar la cantidad de dígitos en tamaño de 20px, 
// tipo de letra Courier new de color Amarillo, si es de 3 a 5 dígitos mostrarla cantidad de dígitos en tamaño de 30px, 
// tipo de letra Times New Roman de color Verde, si tiene mas de 5 dígitos dígitos mostrarla cantidad de dígitos en tamaño de 40px, tipo de letra Verdana de color Rojo.

$num1=$_POST['num1'];

$cantDig= strlen($num1); //strlen — Obtiene la longitud de un string

if($cantDig<=2){
    echo'<p class="Style1">'.'Cantidad de Digitos: '.$cantDig.'</p>';
}

if($cantDig>2 && $cantDig<=5){

    echo'<p class="Style2">'.'Cantidad de Digitos: '.$cantDig.'</p>';

}

if($cantDig>5){
    
    echo'<p class="Style3">'.'Cantidad de Digitos: '.$cantDig.'</p>';

}

?>

</body>
</html>