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


    foreach($cadena as $i){     // itera o muestra cada numero del array

        echo"$i <br>";

        $cont=0;

        for($j=1;$j <= $i;$j++){    // itera cada uno de los numeros del array para verificar si es primo

            if($i % $j == 0){

                $cont++;

            }

        }

        $acumulador=0;

        if($cont == 2){             //selecciona o muestra el numero primo del array

            //echo "primo"."$i <br>";

            $dig=str_split($i);     // combierte o separa en digitos ese numero primo, str_split convierte el numero en un array  

            $cont1=0;

            $digparmay=0;

            foreach($dig as $k){    // itera el array del numero (digitos)

                if($k % 2 == 0){    // compara cada digito si es par

                   // echo "digpar"."$k <br>";

                    $cont1++;

                }

                }

                //echo"contadoruno"."$cont1<br>";

                if($cont1 >= 2){

                    $digparmay= $cont1;

                    //echo"aaaahdhdhdh"."$digparmay<br>";

                    $acumulador=$i;

                    //echo"hyhyhhy"."$acumulador<br>";

                    for($b=0;$b < count($cadena); $b++){    // count — Cuenta todos los elementos de un array o algo de un objeto

                        if($acumulador === $cadena[$b]){

                            echo "El numero esta en el indice: "."$b <br>";

                            break;

                        }

                    }

                }

                if($cont1 == 1){

                    $digparmay= $cont1;

                    //echo"aaaahdhdhdh"."$digparmay<br>";

                    $acumulador=$i;

                    //echo"hyhyhhy"."$acumulador<br>";

                    for($b=0;$b < count($cadena); $b++){        //count — Cuenta todos los elementos de un array o algo de un objeto

                        if($acumulador === $cadena[$b]){

                            echo "El numero esta en el indice: "."$b <br>";

                            break;

                        }

                    }

                }

        }

        

    }

    //echo "numeroquetienedigitosparaes"."$acumulador <br>";

    

}

?>


</body>
</html>