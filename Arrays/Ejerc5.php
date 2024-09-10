<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>5.	Leer X números enteros, almacenarlos en un vector y mostrar en pantalla todos los enteros comprendidos entre 1 y cada uno de los dígitos de cada uno de los números almacenados en el vector.</h1>
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
// 5.	Leer X números enteros, almacenarlos en un vector y mostrar en pantalla 
// todos los enteros comprendidos entre 1 y cada uno de los dígitos de cada uno 
// de los números almacenados en el vector.

if(isset($_POST['num'])){

    $valorarray=$_POST['num'];


    $cadena = array_map('intval', explode(',',$valorarray)); // intval — Obtiene el valor entero de una variable, explode — Divide un string en varios string, La función array_map() envía cada valor de un array a una función hecha por el usuario, y devuelve un array con nuevos valores, dados por la función hecha por el usuario.

    $cont=0;

    print_r($cadena)."<br>";

    foreach($cadena as $k){     // itera o muestra cada numero del array

        echo"<br>";

        echo"<br>$k<br>";

        echo"<br>";

        $dig=str_split($k);

        if($dig[1] > $dig[0]){

            for($i=$dig[0]+1; $i <= $dig[1]-1; $i++ ){

            echo"".$i."<br>";

            }

        }else{

        for($i=$dig[1]+1; $i <= $dig[0]-1; $i++ ){

            echo"".$i."<br>";

            }

        }

    }

}


?>

</body>
</html>