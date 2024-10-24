<?php 

require_once 'estudiante.php';

if(isset($_POST['estudiante']) && isset($_POST['notas'])){

    $nomb=$_POST['estudiante'];
    $nota=$_POST['notas'];

    //echo $nomb;
    //echo $nota;

    $estud = new Estudiante($nomb, $nota);

    echo $estud->getNombre();

    
    //echo $estud->promedioE($nomb, $nota);

    

}


?> 