<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>2. Figuras Geométricas
Crea una clase base Figura con un método calcularArea(). A partir de esta clase,
crea subclases Cuadrado, Rectangulo y Triangulo, cada una con su propia
implementación del método calcularArea(). Luego, crea instancias de cada
figura, calcula su área y muestra los resultados.</h1>

<form action="" method="POST">

<label for="base" >Medidas en metros</label>
<br>
<br>

<label for="base" >Digite base de la figura</label>
<Input type="number" name="base" id="base required">
<br>
<br>

<label for="altura" >Digite la altura de la</label>
<Input type="number" name="altura" id="altura required">
<br>
<br>

<select name="opcion" id="opcion">
<option value="C">Cuadrado</option>
<option value="R">Rectangulo</option> 
<option value="T">Triangulo</option>
</select> 
<br>
<br>

<Input type="submit" value="Enviar">

</form>
<br>
<br>


<?php 

require_once 'AreaFigura.php';
require_once 'Cuadrado.php';
require_once 'Rectangulo.php';
require_once 'Triangulo.php';

if(isset($_POST['base']) && isset($_POST['altura'])){

$base=$_POST['base'];
$altura=$_POST['altura'];


$opcion=$_POST['opcion'];

if($opcion == "C"){

    $objeto = new cuadrado($base, $altura);

    $objeto->AreaCuadrado();

    }

if($opcion == "R"){

    $objeto = new rectangulo($base, $altura);

    $objeto->AreaRectangulo();

    }

if($opcion == "T"){

    $objeto = new triangulo($base, $altura);

    $objeto->AreaTriangulo();

    }

}

?> 
    
</body>
</html>