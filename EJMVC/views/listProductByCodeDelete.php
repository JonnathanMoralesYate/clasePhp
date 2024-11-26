<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styleConsulta.css?v=1.0">
    <title>Eliminar Producto por Codigo</title>
</head>
<body>
<div class="container">
    <h1>Eliminar Producto por Codigo </h1>
    <div class="navigation">
    <form action="index.php?action=deleteProduct" method="get">
        <input type="hidden" name="action" value="deleteProduct">
        <input type="text" name="code" require>
        <input type="submit" value="Eliminar">
        <br>
        <br>
    </form>
    </div>

    <?php if (isset($products) && count($products) > 0): ?>

        <h2>Resultados de la Busqueda:</h2>

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
<td><?= $product['clase']; ?></td>
<td><?= $product['marca']; ?></td>
<td><?= $product['nombre']; ?></td>
<td><?= $product['descripcion']; ?></td>

</tr>

<?php endforeach; ?>

        </tbody>

    </table>

    <?php elseif (isset($product)): ?>

        <p>No se Encontraron Producto con ese Codigo</p>

        <?php endif; ?>
        <br>
        <br>
        
    <div class="navigation">   
        <form action="index.php?action=dashBoard" method="POST" enctype="multipart/form-data">
            <button type="submit" name="action" value="dashBoard">DashBoard</button>
        </form>
    </div>

    </div>


</body>
</html>