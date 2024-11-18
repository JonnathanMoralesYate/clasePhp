<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styleForm1.css?v=1.0">
    <title>Registrar Usuario</title>
</head>
<body>
<div class="container">
    <h1>Registrar Usuario</h1>
    <br>
    <br>

    <form action="index.php?action=insertUser" method="post" enctype="multipart/form-data">

    <label for="tipo_documento">Tipo Documento</label>
    

    <select name="tipoDocum" id="tipoDocum">
        <option value="">Seleccione Tipo Documento</option>

        <?php
        require_once './controllers/typeDocumentController.php';
        

        $typeDocumentController = new typeDocumentController();

        $types = $typeDocumentController->listTypeDocument();

        //Protección contra inyección de HTML: Se utiliza htmlspecialchars para evitar problemas de seguridad al generar el HTML.
        
        foreach($types as $type) {
            echo "<option value='" . htmlspecialchars($type['idDocum']) . "'>" . htmlspecialchars($type['documento']) . "</option>";
        }
        ?>
    </select>
    

    <br>
    <label for="numero_documento">Numero Documento</label>
    <input type="text" name="numero_documento" required>
    

    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" required>


    <label for="telefono">Numero Celular</label>
    <input type="text" name="telefono" required>


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