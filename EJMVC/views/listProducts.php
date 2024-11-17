<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styleConsulta.css">
    <title>Lista de Productos</title>
</head>
<body>
<div class="container">
    <h1>Lista de Productos</h1>

    <table border="1" class="styled-table">
        <thead>

        <tr>

            <th>Codigo del producto</th>
            <th>Clase</th>
            <th>Marca</th>
            <th>Nombre</th>
            <th>Descripcion</th>
        
        </tr>

        </thead>

        <tbody>

        <?php foreach($products as $product): ?>

        <tr>

        <td><?= $product['codproducto']; ?></td>
        <td><?= $product['idProduc']; ?></td>
        <td><?= $product['marca']; ?></td>
        <td><?= $product['nombre']; ?></td>
        <td><?= $product['descripcion']; ?></td>
        
        </tr>

        <?php endforeach; ?>

        </tbody>

    </table>
    
    <div class="navigation">
    <form action="index.php?action=dashBoard" method="POST" enctype="multipart/form-data">

        <button type="submit" name="action" value="dashBoard">DashBoard</button>

    </form>
    </div>

    </div>
</body>
</html>