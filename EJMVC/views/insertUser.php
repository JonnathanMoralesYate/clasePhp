<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>INSERTAR USUARIO</h1>
    <br>
    <br>

    <form action="index.php?action=insertUser" method="post" enctype="multipart/form-data">

    <label for="numero_documento">Numero Documento</label>
    <input type="number" name="numero_documento" required>
    <br>
    <br>

    <label for="tipo_documento">Tipo Documento</label>
    <input type="text" name="tipo_documento" required>
    <br>
    <br>

    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" required>
    <br>
    <br>

    <label for="telefono">Numero Celular</label>
    <input type="text" name="telefono" required>
    <br>
    <br>

    <input type="submit" value="Guardar">


    </form>
    <br>
    <br>

    <form action="index.php?action=DashBoard" method="post">

    <button type="submit" name="action" value="dashboard">DashBoard</button>
    </form>

</body>
</html>