<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styleForm1.css">
    <title>Registro de Tipo Documento</title>
</head>
<body>
<div class="container">
        <h1>Registro de Tipo Documento</h1>

        <form action="index.php?action=insertTypeDocument" method="post">
            <label for="tipo_documento">Tipo Documento</label>
            <input type="text" name="tipo_documento" required>
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