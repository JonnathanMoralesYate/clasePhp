<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../Ciclos/css/StyleEjcr4.css">
    <title></title>
</head>
<body>

<?php
// 4.	Realizar un ciclo que me muestre 4 líneas donde cada una tenga 1 color distinto.

    // Ciclo para generar las líneas con diferentes colores
    
    for ($i = 1; $i < 13; $i++) {
        echo '<h1 class="style'.$i.'">'.'Color: '. $i. '</h1>';
    }

?>

</body>
</html>
