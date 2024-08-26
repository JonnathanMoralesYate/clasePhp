<?php
// 7. Crea un sistema con SWITCH que, basado en una puntuación entre 0 y 100, asigne
// una calificación:
// • De 90 a 100: "A"
// • De 80 a 89: "B"
// • De 70 a 79: "C"
// • De 60 a 69: "D"
// • Menor a 60: "F"

$num1=$_POST["num1"];

switch($num1){

    case ($num1>=90 && $num1<=100) :
        echo"Su Calificacion es: ". "A";
        break;

        case ($num1>=80 && $num1<=89) :
            echo"Su Calificacion es: "."B";
            break;

            case ($num1>70 && $num1<=79) :
                echo"Su Calificacion es: "."C";
                break;

                case ($num1>=60 && $num1<=69) :
                    echo"Su Calificacion es: "."D";
                    break;

                    case ($num1>=0 && $num1<60) :
                        echo"Su Calificacion es: "."F";
                        break;

                default:
                    echo"Digite de nuevo la puntuacion "."Entre 0 y 100";
                    break;

}


?>