<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista de Usuarios</h1>

    <table border="1">
        <thead>

        <tr>

            <th>Numero de Documento</th>
            <th>Tipo de Documento</th>
            <th>Nombre</th>
            <th>telefono</th>
            <th>Foto</th>
        
        </tr>

        </thead>

        <tbody>

        <?php foreach($users as $user): ?>

        <tr>

        <td><?= $user['numero_documento']; ?></td>
        <td><?= $user['tipo_documento']; ?></td>
        <td><?= $user['nombre']; ?></td>
        <td><?= $user['telefono']; ?></td>
        <td><img src="photo/<?= $user['foto']; ?>" width="100" alt="Foto"></td>

        </tr>

        <?php endforeach; ?>

        </tbody>

    </table>
    <br>
    <br>
    <form action="index.php?action=dashBoard" method="POST" enctype="multipart/form-data">

        <button type="submit" name="action" value="dashBoard">DashBoard</button>

    </form>
</body>
</html>