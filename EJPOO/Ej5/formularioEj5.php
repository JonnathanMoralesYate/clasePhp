<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="POST">

    <label for="nomEmpl" >Digite el Nombre del Empleado</label>
    <Input type="text" name="nomEmpl" id="nomEmpl required">
    <br>
    <br>

    <label for="suelEmpl" >Digite Sueldo del Empleado</label>
    <Input type="number" name="suelEmpl" id="suelEmpl required">
    <br>
    <br>

    <label for="nomProv" >Digite el Nombre del Proveedor</label>
    <Input type="text" name="nomProv" id="nomProv required">
    <br>
    <br>
    
    <label for="valorComp" >Digite el  Valor de la Compra</label>
    <Input type="number" name="valorComp" id="valorComp required">
    <br>
    <br>

    <Input type="submit" value="Enviar">

</form>

<?php
require_once 'Empleado5.php';

if(isset($_POST['nomEmpl']) && isset($_POST['suelEmpl']) && isset($_POST['nomProv']) && isset($_POST['valorComp'])){

    $nomEmpl=$_POST['nomEmpl'];
    $suelEmpl=$_POST['suelEmpl'];
    $nomProv=$_POST['nomProv'];
    $valorComp=$_POST['valorComp'];

        $objetoEmpl = new Empleado5($nomEmpl, $suelEmpl, $nomProv, $valorComp);

        echo $objetoEmpl->empleadoS();
    

        $objetoProv = new Empleado5($nomEmpl, $suelEmpl, $nomProv, $valorComp);

        echo $objetoProv->proveedorC();


}

?>
<br>
<br>
    
</body>
</html>