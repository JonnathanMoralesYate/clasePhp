<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>DASHBOARD</h1>

<form action="index.php?action=insertUser" method="GET">

<button type="submit" name="action" value="insertUser">Insertar Usuario</button>
<br>
<br>

</form>

<form action="index.php?action=insertProduct" method="GET">

<button type="submit" name="action" value="insertProduct">Registrar producto Nuevo</button>
<br>
<br>

</form>

<form action="index.php?action=listUser" method="GET">

<button type="submit" name="action" value="listUsers">Consultar Usuarios</button>
<br>
<br>
</form>

<form action="index.php?action=searchUserByName">

<button type="submit" name="action" value="searchUserByName">Consultar por Nombre Usuarios</button>
<br>
<br>

</form>

<form action="index.php?action=listProducts" method="GET">

<button type="submit" name="action" value="listProducts">Consultar Productos</button>
<br>
<br>
</form>

<form action="index.php?action=searchProductsCode">

<button type="submit" name="action" value="searchProductsCode">Consultar Productos por Codigo</button>
<br>
<br>

</form>

</body>
</html>