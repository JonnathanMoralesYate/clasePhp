<?php

// function printDigits($number) {
//     $digits = str_split((string)$number);
//     foreach ($digits as $digit) {
//         echo $digit . " ";
//     }
// }

// // Driver Code
// $num = 12345;
// printDigits($num);


function printDigits($number) {
    while ($number > 0) {
        $digit = $number % 10;
        echo $digit . " ";
        $number = (int)($number / 10);
    }
}

// Driver Code
$num = 12345;
printDigits($num);


?>