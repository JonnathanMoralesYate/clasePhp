<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styleConsulta.css?v=1.0">
    <title>Eliminar Usuario por ID</title>
</head>
<body>
<div class="container">
    <h1>Eliminar Usuario por ID</h1>
    <div class="navigation">
    <form action="index.php?action=deleteUser" method="get">
        <input type="hidden" name="action" value="deleteUser">
        <input type="text" name="numero_documento" require>
        <input type="submit" value="Eliminar">
        <br>
        <br>
    </form>
    </div>

    <?php if (isset($users) && count($users) > 0): ?>

        <h2>Resultados de la Busqueda:</h2>

        <table border="1" class="styled-table">
        <thead>

        <tr>

            <th>Numero de Documento</th>
            <th>Tipo de Documento</th>
            <th>Nombre</th>
            <th>telefono</th>
        
        </tr>

        </thead>

        <tbody>

        <?php foreach ($users as $user): ?>

        <tr>

        <td><?= $user['idUsua']; ?></td>
        <td><?= $user['documento']; ?></td>
        <td><?= $user['nombre']; ?></td>
        <td><?= $user['celular']; ?></td>

        </tr>

        <?php endforeach; ?>

        </tbody>

    </table>

    <?php elseif (isset($users)): ?>

        <p>No se Encontraron Usuarios con ese Nombre</p>

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