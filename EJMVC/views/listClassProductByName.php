<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styleConsulta.css">
    <title>Buscar Clase de Producto por Nombre</title>
</head>
<body>
<div class="container">
    <h1>Buscar Clase de Producto por Nombre</h1>
    <div class="navigation">
    <form action="index.php?action=searchClassProductByName" method="get">
        <input type="hidden" name="action" value="searchClassProductByName">
        <input type="text" name="nombre_clase" require>
        <input type="submit" value="Buscar">
        <br>
        <br>
    </form>
    </div>

    <?php if (isset($class) && count($class) > 0): ?>

        <h2>Resultados de la Busqueda:</h2>

        <table border="1" class="styled-table">
        <thead>

        <tr>

            <th>Id</th>
            <th>Clase Producto</th>
        
        </tr>

        </thead>

        <tbody>

        <?php foreach ($class as $clas): ?>

        <tr class="active-row">

        <td><?= $clas['idProduc']; ?></td>
        <td><?= $clas['clase']; ?></td>

        </tr>

        <?php endforeach; ?>

        </tbody>

    </table>

    <?php elseif (isset($class)): ?>

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