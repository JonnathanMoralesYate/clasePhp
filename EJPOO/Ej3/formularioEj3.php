<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>3. Crea una clase Rectángulo con propiedades largo y ancho, y métodos
para calcular el área y el perímetro.</h1>
<br>
<br>

<form action="" method="POST">

    <label for="largo" >Digite el Largo de rectangulo en cm</label>
    <Input type="number" name="largo" id="largo required">
    <br>
    <br>

    
    <label for="ancho" >Digite el Ancho del rectangulo en cm</label>
    <Input type="number" name="ancho" id="ancho required">
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

require_once 'rectangulo.php';

if(isset($_POST['largo']) && isset($_POST['ancho'])){

    $largo=$_POST['largo'];
    $ancho=$_POST['ancho'];


    $opcion=$_POST['opcion'];

    $objeto = new rectangulo($largo, $ancho);

    if($opcion == "+"){

        echo "El Area del Rectangulo es: ". $objeto->area()." cm2";

    }else{

        echo "El Perimetro del Rectangulo es: ".$objeto->perimetro()." cm";

    }

}


?> 
    
</body>
</html>