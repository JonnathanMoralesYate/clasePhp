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
    <br>
    <br>
    <label for="num1" >Ingrese un numero entero max de tres cifras</label>
    <Input type="text" name="num1" id="num1 required">
    <br>
    <br>
    <Input type="submit" value="Enviar">

</form>

<br>
<br>

<?php
// 4.	Leer X números enteros, almacenarlos en un vector. 
// Luego leer un entero y determinar cuántos números de los
// almacenados en el vector terminan en el mismo dígito que el último valor leído. 

if(isset($_POST['num'])){

    $valorarray=$_POST['num'];

    $valorent=$_POST['num1'];

    $dig1=intval($valorent / 100);

    $cont=0;

    $cadena = array_map('intval', explode(',',$valorarray)); // intval — Obtiene el valor entero de una variable, explode — Divide un string en varios string, La función array_map() envía cada valor de un array a una función hecha por el usuario, y devuelve un array con nuevos valores, dados por la función hecha por el usuario.

    print_r($cadena)."<br>";        // print_r — Imprime información legible para humanos sobre una variable

    echo"<br>";

    echo"<br>$valorent<br>";

    echo"<br>";

    if($valorent > 99 && $valorent < 1000){

        $dig3=$valorent % 10;

        //echo"<br>$dig3<br>";

        foreach($cadena as $i){

            //echo"$i<br>";

            $dig=str_split($i);

            $ultdig=end($dig);

            //echo"as: $ultdig<br>";

                if($ultdig == $dig3){    // compara el ultimo digito del array con el ultimo digito del numero ingresado

                    $cont++;

                }

        }

        echo"$cont numeros del vector terminan en el digito $dig3 <br>";

    }

    if($valorent > 9 && $valorent < 100){

        $dig2=intval($valorent % 10) ;

        //echo"<br>$dig2<br>";

        foreach($cadena as $i){

            //echo"$i<br>";

            $dig=str_split($i);

            $ultdig=end($dig);

            //echo"as: $ultdig<br>";

                if($ultdig == $dig2){    // compara el ultimo digito del array con el ultimo digito del numero ingresado

                    $cont++;

                }

        }

        echo"$cont numeros del vector terminan en el digito $dig2 <br>";

    }

    if($valorent > 0 && $valorent < 10){

        $dig1=$valorent;

        foreach($cadena as $i){

            $dig=str_split($i);

            $ultdig=end($dig);

                if($ultdig == $dig1){    // compara el ultimo digito del array con el ultimo digito del numero ingresado

                    $cont++;

                }

        }

        echo"$cont numeros del vector terminan en el digito $dig1 <br>";

    }

}

?>

</body>
</html>