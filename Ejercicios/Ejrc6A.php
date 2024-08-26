<?php
// 6. Basado en el rol de un usuario, muestra su nivel de acceso en el sistema con SWITCH.
// • "admin" O “ADMIN”: acceso total
// • "editor" O “EDITOR”: acceso limitado a edición de contenido
// • "viewer" O “VIEWER”: solo visualización
// • Cualquier otro rol: "Acceso denegado"


$num1=$_POST['num1'];

switch($num1){

    case "ADMIN" :
        echo"Nivel de Acceso: ". "Aceso Total";
        break;

        case "EDITOR" :
            echo"Nivel de Acceso: "."Acceso Limitadodo a Edicion de Contenido";
            break;

            case "VIEWER" :
                echo"Nivel de Acceso: "."Solo Visualizacion";
                break;

                default:
                    echo"Nivel de Acceso: "."Acceso Denegado";
                    break;

}


?>