<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styleConsulta.css?v=1.0">
    <title>Lista de Usuarios</title>
</head>
<body>
<div class="container">
    <h1>Lista de Usuarios</h1>

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

        <?php foreach($users as $user): ?>

        <tr>

        <td><?= $user['idUsua']; ?></td>
        <td><?= $user['idDocum']; ?></td>
        <td><?= $user['nombre']; ?></td>
        <td><?= $user['celular']; ?></td>
        
        </tr>

        <?php endforeach; ?>

        </tbody>

    </table>
    
    <div class="navigation">
    <form action="index.php?action=dashBoard" method="POST" enctype="multipart/form-data">

        <button type="submit" name="action" value="dashBoard">DashBoard</button>

    </form>
    </div>

    </div>
</body>
</html>