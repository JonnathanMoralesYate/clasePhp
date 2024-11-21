<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styleForm1.css?v=1.0">
    <title>Actualizar Tipo Documento</title>
</head>
<body>
<div class="container">
        <h1>Actualizar Tipo Documento</h1>

        <form action="index.php?action=updateType" method="post">
            <?php foreach($types as $type): ?>
                <input type="hidden" name="idType" value=<?= $type['idDocum']; ?>>
                <label for="tipo_documento">Tipo Documento</label>
                <input type="text" name="tipo_documento" value="<?= $type['documento']; ?>" required>
            <?php endforeach; ?>
        <input type="submit" value="Guardar">
        </form>

        <div class="navigation">
            <form action="index.php?action=DashBoard" method="post">
                <button type="submit" name="action" value="dashboard">DashBoard</button>
            </form>
        </div>
    </div>

</body>
</html>