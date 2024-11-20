<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styleForm1.css?v=1.0">
    <title>Actualizar Clase Producto</title>
</head>
<body>
<div class="container">
        <h1>Actualizar Clase Producto</h1>

        <form action="index.php?action=updateClass" method="post">

                <?php foreach($class as $clas): ?>
            <input type="hidden" name="id" value=<?= $clas['idProduc']; ?>>
                <?php endforeach; ?>
            <label for="clase_producto">Clase del Producto</label>

            <input type="text" name="clase_producto" value=<?= $clas['clase']; ?>>

            <input type="submit" value="Guardar">
        </form>

        <div class="navigation">
            <form action="index.php?action=DashBoard" method="post">
                <button type="submit" name="action" value="dashboard">DashBoard</button>
            </form>
        </div>
    </div>

</body>
</html>