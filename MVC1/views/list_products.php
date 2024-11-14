<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista de Productos</h1>

    <table border="1">
        <thead>

        <tr>

            <th>Codigo del producto</th>
            <th>Marca</th>
            <th>Nombre</th>
            <th>Descripcion</th>
        
        </tr>

        </thead>

        <tbody>

        <?php foreach($products as $product): ?>

        <tr>

        <td><?= $product['codProducto']; ?></td>
        <td><?= $product['marca']; ?></td>
        <td><?= $product['nombre']; ?></td>
        <td><?= $product['descripcion']; ?></td>
        
        </tr>

        <?php endforeach; ?>

        </tbody>

    </table>
    <br>
    <br>
    <form action="index.php?action=dashBoard" method="POST">

        <button type="submit" name="action" value="dashBoard">DashBoard</button>

    </form>
</body>
</html>