<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Calculadora en php POO</h1>
<br>
<br>

<form action="" method="POST">

    <label for="num1" >Digite el primer numero</label>
    <Input type="text" name="num1" id="num1 required">
    <br>
    <br>

    <label for="num2" >Digite el segundo numero</label>
    <Input type="text" name="num2" id="num2 required">
    <br>
    <br>

    <select name="opcion" id="opcion">
            <option value="+">Suma</option>
            <option value="-">Resta</option>
            <option value="*">Multiplicacion</option>
            <option value="/">Division</option>
    </select> 
    <br>
    <br>

    <Input type="submit" value="Enviar">

</form>
<br>
<br>


<?php 

require_once 'calculadora.php';

if(isset($_POST['num1']) && isset($_POST['num2'])){

    $num1=$_POST['num1'];

    $num2=$_POST['num2'];

    $opcion=$_POST['opcion'];

    $objeto = new calculadora($num1, $num2);

    if($opcion == "+"){

        echo $objeto->suma().'<br>';

    }

    if($opcion == "-"){

        echo $objeto->resta().'<br>';

    }

    if($opcion == "/"){

        echo $objeto->division().'<br>';

    }

    if($opcion == "*"){

        echo $objeto->multiplicacion().'<br>';

    }


}




//require_once 'calculadora.php';

//$resultado = new calculadora(9,3);

//echo'El valor del numero 1 es: '.$resultado->getNum1().'<br>';

//echo'El valor del numero 2 es: '.$resultado->getNum2().'<br>';

//echo $resultado->suma().'<br>';


//echo"La suma es: ".$resultado->suma()."<br>";

//echo"La resta es: ".$resultado->resta()."<br>";

//echo"La division es: ".$resultado->division(),"<br>";

//echo"La multiplicacion es: ".$resultado->multiplicacion()."<br>";

?> 




</body>
</html>