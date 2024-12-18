<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styleConsulta.css?v=1.0">
    <title>Lista de Facturas</title>
</head>
<body>
<div class="container">

    <h1>Lista de Facturas</h1>

    <table border="1" class="styled-table">
        <thead>

        <tr>

            <th>Id</th>
            <th>Numero Documento</th>
            <th>Codigo Producto</th>
            <th>Fecha de Venta</th>
            <th>Cantidad</th>

        </tr>

        </thead>

        <tbody>

        <?php foreach($invoice as $invoic): ?>

        <tr class="active-row">

        <td><?= $invoic['idFactura']; ?></td>
        <td><?= $invoic['idUsua']; ?></td>
        <td><?= $invoic['codProducto']; ?></td>
        <td><?= $invoic['fecha']; ?></td>
        <td><?= $invoic['cantidad']; ?></td>

        </tr>

        <?php endforeach; ?>

        </tbody>

    </table>
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