<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>1. Leer X números enteros, almacenarlos en un vector y determinar en qué posición se encuentra el último número primo con mayor cantidad de dígitos pares.</h1>
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
// 1. Leer X números enteros, almacenarlos en un vector y determinar 
// en qué posición se encuentra el último número primo
// con mayor cantidad de dígitos pares.


if(isset($_POST['num'])){

    $valorarray=$_POST['num'];


    $cadena = array_map('intval', explode(',',$valorarray)); // intval — Obtiene el valor entero de una variable, explode — Divide un string en varios string, La función array_map() envía cada valor de un array a una función hecha por el usuario, y devuelve un array con nuevos valores, dados por la función hecha por el usuario.

    $acum1=0;

    print_r($cadena)."<br>";

    foreach($cadena as $i){     // itera o muestra cada numero del array

        echo"<br>$i <br>";

        $cont=0;

        for($j=1;$j <= $i;$j++){    // itera cada uno de los numeros del array para verificar si es primo

            if($i % $j == 0){

                $cont++;

            }

        }

        if($cont == 2){             //selecciona o muestra el numero primo del array

            //echo "primo"."$i <br>";

            $dig=str_split($i);     // combierte o separa en digitos ese numero primo, str_split convierte el numero en un array  

            $cont1=0;

           

            foreach($dig as $k){    // itera el array del numero (digitos)

                if($k % 2 == 0){    // compara cada digito si es par

                   //echo "digpar"."$k <br>";

                    $cont1++;

                }

                }

        }

        }

    if($cont1 >= $acum1){

        $acum1=$cont1;

        for($b=0;$b < count($cadena); $b++){    // count — Cuenta todos los elementos de un array o algo de un objeto

            if($i == $cadena[$b]){

            echo "El numero esta en el indice: "."$b <br>";

            break;

        }

        }

    }    

}

?>


</body>
</html>