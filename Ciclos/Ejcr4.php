<?php
    // Array de colores
    $colores = ['green', 'red', 'yellow', 'blue'];

    // Ciclo para generar las líneas con diferentes colores
    for ($i = 0; $i < 4; $i++) {
        echo '<div style="color:' . $colores[$i] . ';">Línea ' . ($i + 1) . '</div>';
    }
    ?>