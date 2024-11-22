<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styleForm1.css?v=1.0">
    <title>Actualizar Producto</title>
</head>
<body>
<div class="container">
    <h1>Actualizar Producto</h1>
    <br>
    <br>

    <form action="index.php?action=updateProduct" method="post">

    <?php foreach($products as $product): ?>

    <!-- <label for="codigoProduc">Codigo del Producto</label> -->
    <input type="hidden" name="codigoProduc" value="<?= $product['codproducto']; ?>" required>

    <label for="tipo_documento">Clase del Producto</label>

        <?php $selectedClass = $product['idProduc']; ?>
    <select name="claseProduc" id="claseProduc">
        <option value="">Seleccione la Clase</option>

        <?php foreach($class as $clas): ?>
            <option
                value="<?= $clas['idProduc']; ?>"
                <?= $clas['idProduc'] == $selectedClass ? 'selected' : '' ?>>
                <?= $clas['clase']; ?>
            </option>
        <?php endforeach; ?>
    </select>
    
    <br>
    <label for="marca">Marca</label>
    <input type="text" name="marcaP" value="<?= $product['marca']; ?>" required>
    

    <label for="nombre">Nombre</label>
    <input type="text" name="nombreP" value="<?= $product['nombre']; ?>" required>

    <label for="descripcion">Descripcion</label>
    <input type="text" name="descripcionP" value="<?= $product['descripcion']; ?>" required>


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