<?php
// 6. Basado en el rol de un usuario, muestra su nivel de acceso en el sistema con MATCH.
// • "admin" O “ADMIN”: acceso total
// • "editor" O “EDITOR”: acceso limitado a edición de contenido
// • "viewer" O “VIEWER”: solo visualización
// • Cualquier otro rol: "Acceso denegado"

$num1=$_POST['num1'];

$num1=strtolower($num1); //funcion convierte mayusculas a minusculas

$respuesta=match ("$num1") {
    "admin" => "Acceso total" ,
    "editor" => "Acceso limitado a edición de contenido" ,
    "viewer" => "Solo visualización" ,
    default => "Acceso denegado",
};

echo"Nivel de Acceso: ".$respuesta;

?>