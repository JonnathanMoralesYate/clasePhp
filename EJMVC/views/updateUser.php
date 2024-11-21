<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styleForm1.css?v=1.0">
    <title>Actualizar Usuario</title>
</head>
<body>
<div class="container">
    <h1>Actualizar Usuario</h1>
    <br>
    <br>

    <form action="index.php?action=updateUser" method="post">

    <?php foreach($users as $user): ?>

    <label for="tipo_documento">Tipo Documento</label>

    <?php $selectedDocum = $user['idDocum']; ?>
<select name="tipoDocum" id="tipoDocum">
    <option value="">Seleccione Tipo Documento</option>
    <?php foreach($types as $type): ?>
        <option 
            value="<?= $type['idDocum']; ?>" 
            <?= $type['idDocum'] == $selectedDocum ? 'selected' : ''; ?>>
            <?= $type['documento']; ?>
        </option>
    <?php endforeach; ?>
</select>
    
    <br>
    <!-- <label for="numero_documento">Numero Documento</label> -->
    <input type="hidden" name="numero_documento" value="<?= $user['idUsua']; ?>" required>
    

    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" value="<?= $user['nombre']; ?>" required>


    <label for="telefono">Numero Celular</label>
    <input type="text" name="telefono" value="<?= $user['celular']; ?>" required>


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