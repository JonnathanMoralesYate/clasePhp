<?php
// 5A. Crear una calculadora básica con la opción SWITCH.

$num1=$_POST['num1'];
$num2=$_POST['num2'];
$opcion=$_POST['opcion'];

switch($opcion){

    case "+" :
        echo"El resultado es:".$num1 + $num2;
        break;

        case "-" :
            echo"El resultado es:".$num1 - $num2;
            break;

            case "*" :
                echo"El resultado es:".$num1 * $num2;
                break;

                case "/" :
                    echo"El resultado es:".$num1 / $num2;
                    break;

}

?>