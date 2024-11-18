<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styleForm1.css?v=1.0">
    <title>Registrar Producto</title>
</head>
<body>
<div class="container">
    <h1>Registrar Producto</h1>
    <br>
    <br>

    <form action="index.php?action=insertProduct" method="post" enctype="multipart/form-data">

    <label for="codigoProduc">Codigo del Producto</label>
    <input type="text" name="codigoProduc" required>

    <label for="tipo_documento">Clase del Producto</label>
    

    <select name="claseProduc" id="claseProduc">
        <option value="">Seleccione la Clase</option>

        <?php
        require_once './controllers/classProductController.php';
        

        $classProductController = new classProductController();

        $class = $classProductController->listClassProduct();

        //Protección contra inyección de HTML: Se utiliza htmlspecialchars para evitar problemas de seguridad al generar el HTML.
        
        foreach($class as $clas) {
            echo "<option value='" . htmlspecialchars($clas['idProduc']) . "'>" . htmlspecialchars($clas['clase']) . "</option>";
        }
        ?>
    </select>
    
    <br>
    <label for="marca">Marca</label>
    <input type="text" name="marcaP" required>
    

    <label for="nombre">Nombre</label>
    <input type="text" name="nombreP" required>

    <label for="descripcion">Descripcion</label>
    <input type="text" name="descripcionP" required>


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