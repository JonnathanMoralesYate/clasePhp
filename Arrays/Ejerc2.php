<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>1. 2.	Leer X números enteros, almacenarlos en un vector y determinar en qué posición se encuentra el número con mayor cantidad de dígitos primos.</h1>
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
// 2.	Leer X números enteros, almacenarlos en un vector y determinar en qué posición
// se encuentra el número con mayor cantidad de dígitos primos.

if(isset($_POST['num'])){

    $valorarray=$_POST['num'];

    $acum2=0;

    $cadena = array_map('intval', explode(',',$valorarray)); // intval — Obtiene el valor entero de una variable, explode — Divide un string en varios string, La función array_map() envía cada valor de un array a una función hecha por el usuario, y devuelve un array con nuevos valores, dados por la función hecha por el usuario.

    print_r($cadena)."<br>";

    foreach($cadena as $key=>$i){     // itera o muestra cada numero del array

        echo"<br>";

        echo"<br>$key<br>";

        $cont=0;

        for($j=1;$j <= $key;$j++){    // itera cada uno de los numeros del array para verificar si es primo 277 - 337 - 23

            if($i % $j == 0){

                $cont++;//2

            }

        }

        if($cont == 2){             //selecciona o muestra el numero primo del array

            $dig=str_split($key);     // combierte o separa en digitos el numero primo, str_split convierte el numero en un array  

            $cont2=0;

            foreach($dig as $k){ //377

                $cont1=0; //si el digito es primo 2

                $acum1=0; //

                for($a=1;$a <= $k;$a++){    // itera cada uno de los numeros del array para verificar si es primo 2 - 3

                    if($k % $a == 0){

                        $cont1++;//2

                    }

                }

                if($cont1 == 2){             //selecciona o muestra el digito primo del array

                    $cont2++; //1+1

                }

            }

            if($cont2 >= $acum1){

                $acum1=$cont2;//cant digitos primos
                $posi=$key;//posic 1
                $valor=$i;//numero actual

                }

            }  

        }

    } 
    
    echo "La cant de digitos primos es: ".$acum1."<br>";
    echo "La posicion es: ".$acum1."<br>";


?>

</body>
</html>