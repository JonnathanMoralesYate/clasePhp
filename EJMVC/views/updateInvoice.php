<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styleForm1.css?v=1.0">
    <title>Actualizar Factura</title>
</head>
<body>
<div class="container">
    <h1>Actualizar Factura</h1>
    <br>
    <br>

    <form action="index.php?action=updateInvoice" method="post">

    <?php foreach($invoice as $invoic): ?>

    <input type="hidden" name="idFactura" value="<?= $invoic['idFactura']; ?>">    

    <label for="numero_documento">Numero Documento  Cliente</label>
    <input type="text" name="numero_documento" value="<?= $invoic['idUsua']; ?>" required>

    <br>
    <label for="codigoProduc">Codigo del Producto</label>
    <input type="text" name="codigoProduc" value="<?= $invoic['codProducto']; ?>" required>
    

    <label for="fechaV">Fecha de Venta</label>
    <input type="date" name="fechaV" value="<?= $invoic['fecha']; ?>" required>


    <label for="cantidadP">Cantidad</label>
    <input type="text" name="cantidadP" value="<?= $invoic['cantidad']; ?>" required>


    <input type="submit" value="Actualizar">

    <?php endforeach; ?>

    </form>
    <br>
    <br>

    <div class="navigation">
    <form action="index.php?action=DashBoard" method="post">
        <button type="submit" name="action" value="dashboard">DashBoard</button>
    </form>
    </div>
    </div>
</body>
</html>