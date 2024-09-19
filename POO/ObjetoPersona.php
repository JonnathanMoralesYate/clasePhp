<?php

require_once 'ClasePersona.php';

$objeto = new Persona('Jose', 20);

echo'El nombre de la persona es: '.$objeto->getNom().'<br>';

$objeto1 = new Persona('Cindy', 22);

echo'La edad de la persona es: '.$objeto1->getEdad().'<br>';

$objeto2 = new Persona('Yaneth', 23);

echo $objeto2->mostrar().'<br>';

?>