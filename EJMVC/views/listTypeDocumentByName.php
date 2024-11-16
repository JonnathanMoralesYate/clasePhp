<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styleConsulta.css">
    <title>Buscar Tipo de Documento por Nombre</title>
</head>
<body>
<div class="container">
    <h1>Buscar Tipo de Documento por Nombre</h1>
    <div class="navigation">
    <form action="index.php?action=searchTypeDocumentByName" method="get">
        <input type="hidden" name="action" value="searchTypeDocumentByName">
        <input type="text" name="nombre" require>
        <input type="submit" value="Buscar">
        <br>
        <br>
    </form>
    </div>

    <?php if (isset($types) && count($types) > 0): ?>

        <h2>Resultados de la Busqueda:</h2>

        <table border="1" class="styled-table">
        <thead>

        <tr>

            <th>Id</th>
            <th>Tipo Documento</th>
        
        </tr>

        </thead>

        <tbody>

        <?php foreach ($types as $type): ?>

        <tr class="active-row">

        <td><?= $type['idDocum']; ?></td>
        <td><?= $type['documento']; ?></td>

        </tr>

        <?php endforeach; ?>

        </tbody>

    </table>

    <?php elseif (isset($types)): ?>

        <p>No se Encontraron Tipo Documento con ese Nombre</p>

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