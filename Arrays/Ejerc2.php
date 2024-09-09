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


    $cadena = array_map('intval', explode(',',$valorarray)); // intval — Obtiene el valor entero de una variable, explode — Divide un string en varios string, La función array_map() envía cada valor de un array a una función hecha por el usuario, y devuelve un array con nuevos valores, dados por la función hecha por el usuario.


    foreach($cadena as $i){     // itera o muestra cada numero del array

        echo"$i <br>";

        $cont=0;

        for($j=1;$j <= $i;$j++){    // itera cada uno de los numeros del array para verificar si es primo

            if($i % $j == 0){

                $cont++;

            }

        }

        if($cont == 2){             //selecciona o muestra el numero primo del array

            $dig=str_split($i);     // combierte o separa en digitos el numero primo, str_split convierte el numero en un array  

            $cont2=0;

            foreach($dig as $k){

                $cont1=0;

                for($a=1;$a <= $k;$a++){    // itera cada uno de los numeros del array para verificar si es primo

                    if($k % $a == 0){

                        $cont1++;

                    }

                }

                $acumulador=0;

                if($cont1 == 2){             //selecciona o muestra el digito primo del array

                    echo "digitoprimo"."$k <br>";

                    $cont2++;

                    $acumulador=$i;

                }

            }

        }

        if($cont2 === 3){

            for($b=0;$b < count($cadena); $b++){        //count — Cuenta todos los elementos de un array o algo de un objeto
    
                if($acumulador === $cadena[$b]){
    
                    echo "El: "."$acumulador <br>";
    
                    echo "El numero esta en el indice: "."$b <br>";
    
                    break;
    
                }
    
            }
    
        }
    
        if($cont2 === 2){
    
            for($b=0;$b < count($cadena); $b++){        //count — Cuenta todos los elementos de un array o algo de un objeto
    
                if($acumulador === $cadena[$b]){
    
                    echo "El: "."$acumulador <br>";
    
                    echo "El numero esta en el indice: "."$b <br>";
    
                    break;
    
                }
    
            }
    
        }
    
        if($cont2 === 1){
    
            for($b=0;$b < count($cadena); $b++){        //count — Cuenta todos los elementos de un array o algo de un objeto
    
                if($acumulador === $cadena[$b]){
    
                    echo "El numero  en el indice: "."$b <br>";
    
                    break;
    
                }
    
            }
    
        }

    }  

    


}

?>


</body>
</html>