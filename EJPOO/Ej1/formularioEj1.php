<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Crea una clase Circulo que tenga como propiedad el radio y métodos para calcular el área y el perímetro.</h1>
<br>
<br>

<form action="" method="POST">

    <label for="radio" >Digite el Radio del Circulo en cm</label>
    <Input type="number" name="radio" id="radio required">
    <br>
    <br>

    <select name="opcion" id="opcion">
            <option value="+">Area</option>
            <option value="-">Perimetro</option>
    </select> 
    <br>
    <br>

    <Input type="submit" value="Enviar">

</form>
<br>
<br>


<?php 

require_once 'circulo.php';

if(isset($_POST['radio'])){

    $radio=$_POST['radio'];


    $opcion=$_POST['opcion'];

    $objeto = new circulo($radio);

    if($opcion == "+"){

        echo "El Area del circulo es: ". $objeto->area()." cm2";

    }else{

        echo "El Perimetro del circulo es: ".$objeto->perimetro()." cm";

    }

}


?> 
    
</body>
</html>