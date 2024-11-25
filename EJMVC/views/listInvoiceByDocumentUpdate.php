<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styleConsulta.css?v=1.0">
    <title>Actualizar Factura por ID Factura</title>
</head>
<body>
<div class="container">
    <h1>Actualizar Factura por ID Factura</h1>
    <div class="navigation">
    <form action="index.php?action=searchInvoiceByDocumentU" method="get">
        <input type="hidden" name="action" value="searchInvoiceByDocumentU">
        <input type="text" name="idFactura" require>
        <input type="submit" value="Buscar">
        <br>
        <br>
    </form>
    </div>

    <?php if (isset($invoice) && count($invoice) > 0): ?>

        <h2>Resultados de la Busqueda:</h2>

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

        <?php foreach ($invoice as $invoic): ?>

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

    <?php elseif (isset($invoice)): ?>

        <p>No se Encontro Clase de Productos con ese Nombre</p>

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