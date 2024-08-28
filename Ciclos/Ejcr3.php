<?php
// 3.	Realizar un ciclo que muestre 3 Label con sus respectivos inputs Type Text,
 // debe funcionar que al dar clic en el label debe seleccionar su respectivo input.

$num1=$_POST['num1'];

$cantidad = $num1;

// Genera los labels e inputs dinámicamente
for ($i = 1; $i <= $cantidad; $i++) {
    echo '<label for="input' . $i . '">Label ' . $i . '</label>'. '<br>';
    echo '<input type="text" id="input' . $i . '"><br>';
}

?>