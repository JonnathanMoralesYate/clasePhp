<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>REGISTRAR PRODUCTOS</h1>
    <br>
    <br>

    <form action="index.php?action=insertProduct" method="POST">

    <label for="codProducto">Codigo producto</label>
    <input type="text" name="codProducto" required>
    <br>
    <br>

    <label for="marcaP">Marca</label>
    <input type="text" name="marcaP" required>
    <br>
    <br>

    <label for="nombreP">Nombre</label>
    <input type="text" name="nombreP" required>
    <br>
    <br>

    <label for="descripcionP">Descripcion del Producto</label>
    <input type="text" name="descripcionP" required>
    <br>
    <br>

    <input type="submit" value="Guardar">


    </form>
    <br>
    <br>

    <form action="index.php?action=DashBoard" method="post">

    <button type="submit" name="action" value="dashboard">DashBoard</button>
    </form>

</body>
</html>