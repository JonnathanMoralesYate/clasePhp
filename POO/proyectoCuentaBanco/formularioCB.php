<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Cuenta Bancaria</h1>
<br>
<br>

<h2>Seleccione la Operacion que Desea Realizar</h2>

<form action="" method="POST">

    <select name="opcion" id="opcion">
        <option value="ret">Retirar</option>
        <option value="dep">Depositar</option>
        <option value="cs">Consultar Saldo</option>
    </select> 
    <br>
    <br>

    <label for="monto" >Digite el Monto</label>
    <Input type="number" name="monto" id="monto required">
    <br>
    <br>

    <Input type="submit" value="Confirmar">

</form>
<br>
<br>
<br>
<br>


<?php

include_once 'cuentaBanco.php';

if(isset($_POST['monto']) && isset($_POST['opcion'])){

$monto=$_POST['monto'];
$opcion=$_POST['opcion'];

$objeto = new banco($monto);

if($opcion == "ret"){

    $objeto->Retirar($monto);

}elseif($opcion == "dep"){

    $objeto->Depositar($monto);

}else{

    echo $objeto->ConsultaSaldo();

}

}

?>
    
</body>
</html>