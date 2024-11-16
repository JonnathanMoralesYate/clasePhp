<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styleForm1.css">
    <title>Registro Clase Producto</title>
</head>
<body>
<div class="container">
        <h1>Registro Clase Producto</h1>

        <form action="index.php?action=insertClassProduct" method="post">
            <label for="clase_producto">Clase del Producto</label>
            <input type="text" name="clase_producto" required>
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