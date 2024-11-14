<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar usuario por Nombre</title>
</head>
<body>
    <h1>Buscar Producto por Codigo</h1>

    <form action="index.php?action=searchProductsCode" method="get">
        <input type="hidden" name="action" value="searchProductsCode">
        <input type="text" name="codigo" require>
        <input type="submit" value="Buscar">
        <br>
        <br>
    </form>

    <?php if (isset($products) && count($products) > 0): ?>

        <h2>Resultados de la Busqueda:</h2>

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

    <?php elseif (isset($products)): ?>

        <p>No se Encontro el Producto con ese Codigo</p>

        <?php endif; ?>
        <br>
        <br>
        
    <form action="index.php?action=dashBoard" method="POST">

        <button type="submit" name="action" value="dashBoard">DashBoard</button>

    </form>


</body>
</html>