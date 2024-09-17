<?php

//funcion para generar los label e input que quiera el usuario

function campos(){
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

}


    // funcion para mostrar datos que ingreso el usuario

    function mostrar(){

        if(isset($_POST['datos'])){

            $datos=$_POST['datos'];
    
            echo '<ul>';
            
            foreach($datos as $key => $datos){
                echo '<li> dato' . ($key+1).': '.$datos.'</li><br>';
            };
    
            echo '</ul>';
    
        }

    }

?>