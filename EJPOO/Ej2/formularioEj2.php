<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Crear un juego de rol donde cada tipo de personaje tendrá atributos y habilidades únicas, cada personaje tendrá un nombre y una fecha de nacimiento, si el personaje es mago debe tener un poder en particular y debe pertenecer a un elemento (Agua, tierra, fuego o aire); debe mostrar que poder tiene y a que elemento pertenece, si el personaje es guerrero debe tener un arma en particular y debe mostrar su nombre, fecha de nacimiento y arma que utiliza. (Los datos deben ingresar por formulario).</h1>
<br>
<br>

<form action="" method="POST">

    <label for="nomPers" >Digite el Nombre del Personaje</label>
    <Input type="text" name="nomPers" id="nomPers required">
    <br>
    <br>

    <label for="fechaPers" >Digite Fecha de Nacimiento</label>
    <Input type="text" name="fechaPers" id="fechaPers required">
    <br>
    <br>

    <label for="fechaPers" >Selecione Clase del personaje</label>
    <br>
    <br>
    <select name="opcion1" id="opcion1">
            <option value="0"></option>
            <option value="1">Guerrero</option>
            <option value="2">Mago</option>
    </select> 
    <br>
    <br>

    <label for="claseGuerrero" >Selecione si es Clase Guerrero</label>
    <br>
    <br>

    <label for="arma" >Tipo Arma</label>
    <br>
    <br>

    <select name="arma" id="arma">

            <?php
            // Iterar sobre los valores del Enum
            foreach (Armas::cases() as $arma) {
                echo "<option value=\"{$arma->value}\">{$arma->name}</option>";
            }
            ?>
        </select>
        <br>
        <br>

    <label for="alcance" >Alcance</label>
    <br>
    <br>
    <select name="alcance" id="alcance">
    <?php
    // Iterar sobre los valores del Enum
    foreach (Alcance::cases() as $alcance) {
    echo "<option value=\"{$alcance->value}\">{$alcance->name}</option>";
    }
    ?>
    <br>
    <br>
   
    <label for="claseMago" >Selecione si es Clase Mago</label>
    <br>
    <br>

    <label for="tipPoder" >Tipo Poder</label>
    <br>
    <br>

    <select name="opcion3" id="opcion3">
            <option value="0"></option>
            <option value="1">Lanza Fuego</option>
            <option value="2">Lanza Rocas</option>
            <option value="3">Lanza Hielo</option>
    </select> 
    <br>
    <br>

    <label for="tipElement" >Tipo Elemento</label>
    <br>
    <br>

    <select name="opcion31" id="opcion31">
            <option value="0"></option>
            <option value="1">Agua</option>
            <option value="2">Tierra</option>
            <option value="3">Fuego</option>
            <option value="4">Aire</option>
    </select> 
    <br>
    <br>

    <Input type="submit" value="Enviar">

</form>
<br>
<br>

<?php 

require_once 'personajeA.php';
require_once 'mago.php';
require_once 'guerrero.php';

if(isset($_POST['nomPers']) && isset($_POST['fechaPers']) || isset($_POST['opcion2']) || isset($_POST['opcion21']) || isset($_POST['opcion3']) || isset($_POST['opcion31'])){

    $nomPer=$_POST['nomPers'];
    $fechaPer=$_POST['fechaPers'];
    $arma=$_POST['opcion2'];
    $alcance=$_POST['opcion21'];
    $poder=$_POST['opcion3'];
    $elemento=$_POST['opcion31'];


    $opcion=$_POST['opcion1'];

    if($opcion == "1"){

        $objetoG = new guerrero($nomPer, $fechaPer, $arma, $alcance);

        echo "Datos del Personaje Guerrero: ". $objeto->area()." cm2";

    }else{

        $objetoM = new mago($nomPer, $fechaPer, $poder, $elemento);

        echo "Datos del Personaje Mago: ".$objeto->perimetro()." cm";

    }

}


?> 
    
</body>
</html>