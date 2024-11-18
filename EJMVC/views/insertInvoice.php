<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styleForm1.css?v=1.0">
    <title>Registrar Factura</title>
</head>
<body>
<div class="container">
    <h1>Registrar Factura</h1>
    <br>
    <br>

    <form action="index.php?action=insertInvoice" method="post">

    <label for="numero_documento">Numero Documento  Cliente</label>
    <input type="text" name="numero_documento" required>

    <br>
    <label for="codigoProduc">Codigo del Producto</label>
    <input type="text" name="codigoProduc" required>
    

    <label for="fechaV">Fecha de Venta</label>
    <input type="date" name="fechaV" required>


    <label for="cantidadP">Cantidad</label>
    <input type="text" name="cantidadP" required>


    <input type="submit" value="Guardar">

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