<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>3.	Leer X números enteros, almacenarlos en un vector y determinar cuántas veces en el vector se encuentra el dígito 2. No se olvide que el dígito 2 puede estar varias veces en un mismo número.</h1>
<br>
<br>

<form action="" method="POST">

    <label for="num" >Ingrese los numeros separados por " , "</label>
    <Input type="text" name="num" id="num required">
    <Input type="submit" value="Guardar">

</form>

<br>
<br>


<?php
// 3.	Leer X números enteros, almacenarlos en un vector y determinar cuántas veces en el vector se encuentra el dígito 2.
// No se olvide que el dígito 2 puede estar varias veces en un mismo número.

if(isset($_POST['num'])){

    $valorarray=$_POST['num'];


    $cadena = array_map('intval', explode(',',$valorarray)); // intval — Obtiene el valor entero de una variable, explode — Divide un string en varios string, La función array_map() envía cada valor de un array a una función hecha por el usuario, y devuelve un array con nuevos valores, dados por la función hecha por el usuario.

    $cont=0;

    print_r($cadena)."<br>";

    foreach($cadena as $i){     // itera o muestra cada numero del array

        echo"<br>";

        echo"<br>$i<br>";

        $dig=str_split($i);     // combierte o separa en digitos el numero del array , str_split convierte el numero en un array  

        foreach($dig as $k){

            //echo"digito"."$k <br>";

            if($k == 2){

                $cont++;

            }

        }

    } 

    echo"<br>El numero de veces que se repite el digito dos en el vector: ".$cont."<br>";

}

?>

</body>
</html>