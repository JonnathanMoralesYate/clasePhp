<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>1. Sistema de Empleados
Crea un sistema para gestionar empleados de diferentes tipos. La clase base
será Empleado, que tendrá las propiedades nombre y salario. Luego, crea dos
clases derivadas: EmpleadoFijo y EmpleadoPorHora. La clase EmpleadoFijo
tendrá un salario mensual fijo, mientras que EmpleadoPorHora calculará el
salario en función de las horas trabajadas y la tarifa por hora. Crea objetos para
cada tipo de empleado y muestra su salario mensual.</h1>
<br>
<br>

<form action="" method="POST">

<label for="nom" >Digite el nombre del empleado</label>
<Input type="text" name="nom" id="nom required">
<br>
<br>

<label for="salario" >Digite el salario del empleado</label>
<Input type="number" name="salario" id="salario required">
<br>
<br>

<select name="opcion" id="opcion">
<option value="F">Empleado Fijo</option>
<option value="H">Empleado Por Hora</option> 
</select> 
<br>
<br>

<label for="horasTrab" >Digite el tiempo laborado: (si es fijo en dias, si es por horas horas)</label>
<br>
<br>

<label for="tiemTrab" >Digite el tiempo laborado</label>
<Input type="number" name="tiemTrab" id="diasTrab required">
<br>
<br>

<Input type="submit" value="Enviar">

</form>
<br>
<br>


<?php 

require_once 'empleadoe.php';
require_once 'empleadoFijo.php';
require_once 'empleadoPorHora.php';

if(isset($_POST['nom']) && isset($_POST['salario']) && isset($_POST['tiemTrab'])){

$nom=$_POST['nom'];
$salario=$_POST['salario'];

$tiemTrab=$_POST['tiemTrab'];

$opcion=$_POST['opcion'];

if($opcion == "F"){

    $objeto = new empleadoFijo($nom, $salario, $tiemTrab);

    $objeto->salarioF();

    }

if($opcion == "H"){

    $objeto = new empleadoPorHora($nom, $salario, $tiemTrab);

    $objeto->salarioH();

    }

}

?> 


</body>
</html>