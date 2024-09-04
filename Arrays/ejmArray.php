<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="POST">

    <label for="cant" >Cuantos Input</label>
    <Input type="number" name="cant" id="cant required">
    <Input type="submit" value="Enviar">

</form>

    <?php

    //formulario para datos

    if(isset($_POST['cant'])){

        $cant=$_POST['cant'];

        echo '<form action="" method="POST">';
        echo'<br>';

        for( $i = 0 ; $i < $cant; $i++ ){

            echo '<label for="inp'.$i.'">Campo:'.$i.'<br>'.'</label>';
            echo '<input type="number" id="inp'.$i.'" name="datos[]" required="" >'.'<br>';
            echo'<br>';
            
        };

        echo'<br>';
        echo'<input type="submit" value="Enviar">';
        echo '</form>'; 


    }

    //mostrar datos

    if(isset($_POST['datos'])){

        $datos=$_POST['datos'];

        echo '<ul>';
        
        foreach($datos as $key => $datos){
            echo '<li> dato' . ($key+1).': '.$datos.'</li><br>';
        };

        echo '</ul>';
       


    }



    ?>




    
</body>
</html>