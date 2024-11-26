<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styleForm1.css">
    <title>Registrar Factura</title>
</head>
<body>
<div class="container">
    <h1>Registrar Factura</h1>
    <br>
    <br>

    <form action="index.php?action=insertInvoice" method="post">

    <label for="numero_documento">Numero Documento Cliente</label>
    <select name="numero_documento" id="numero_documento">
    <option value="">Identifiacion Cliente</option>
    <?php foreach($users as $user): ?>
        <option value="<?= $user['idUsua']; ?>"><?= $user['idUsua']; ?></option>
    <?php endforeach; ?>
    </select>

    <br>

    <label for="codigoProduc">Codigo del Producto</label>
    <select name="codigoProduc" id="codigoProduc">
    <option value="">Identifiacion Producto</option>
    <?php foreach($products as $product): ?>
        <option value="<?= $product['codproducto']; ?>"><?= $product['codproducto']; ?></option>
    <?php endforeach; ?>
    </select>    

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