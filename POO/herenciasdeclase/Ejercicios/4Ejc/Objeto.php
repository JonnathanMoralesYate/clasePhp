<?php

require_once 'Automovil.php';
require_once 'Auto.php';
require_once 'Moto.php';

//formulario1
if(isset($_POST['modelo'])  || isset($_POST['marca']) || isset($_POST['tipoCombustible']) || isset($_POST['numLlantas']) || isset($_POST['numPasajeros']) || isset($_POST['transmision'])){

    $modelo=$_POST['modelo'];
    $marca=$_POST['marca'];
    $tipCombus=$_POST['tipoCombustible'];
    $numLlan=$_POST['numLlantas'];
    $numPasaj=$_POST['numPasajeros'];
    $carga="";
    $duracion="";
    $transmision=$_POST['transmision'];
    
    
    
    $objeto = new auto($modelo, $marca, $tipCombus, $numLlan, $numPasaj, $carga, $duracion, $transmision);

    echo $objeto->mostrarInf();

    //$objeto = new auto("mn", "benz", "gaso", "4", "5", "", "", "meca");

    //echo $objeto->mostrarInf();
    
    
    }



?>