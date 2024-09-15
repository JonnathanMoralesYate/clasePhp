<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>4.	Leer X números enteros, almacenarlos en un vector. Luego leer un entero y determinar cuántos números de los almacenados en el vector terminan en el mismo dígito que el último valor leído.</h1>
<br>
<br>

<form action="" method="POST">

    <label for="num" >Ingrese los numeros separados por " , "</label>
    <Input type="text" name="num" id="num required">
    <br>
    <Input type="submit" value="Enviar">

</form>

<br>
<br>

<?php
// 4.	Leer X números enteros, almacenarlos en un vector. 
// Luego determinar cuántos números de los almacenados en 
// el vector terminan en el mismo dígito que el último valor leído. 

if(isset($_POST['num'])){

    $valorarray=$_POST['num'];

    $cadena = array_map('intval', explode(',',$valorarray)); // intval — Obtiene el valor entero de una variable, explode — Divide un string en varios string, La función array_map() envía cada valor de un array a una función hecha por el usuario, y devuelve un array con nuevos valores, dados por la función hecha por el usuario.

    print_r($cadena)."<br>";        // print_r — Imprime información legible para humanos sobre una variable

    echo"<br>";

    $digult=(end($cadena) % 10); // muestra o saca el ultimo digito del ultimo valor del array

    echo"$digult<br>";

    $cont=0;

        foreach($cadena as $i){

            $dig=str_split($i);

            $ultdig=end($dig);  // muestra o selecciona el ultimo digito del ultimo de cada valor del array

                if($ultdig == $digult){    // compara el ultimo digito del array con el ultimo digito del numero array 

                    $cont++;

                }

        }

        echo"<br>$cont numeros del vector terminan en el digito $digult <br>";

    }

?>

</body>
</html>