<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styleDashBoard.css?v=1.0">
    <title>Document</title>
</head>
<body>

<h1>DASHBOARD</h1>
    <div class="menu">
        <!-- Botón 1 -->
        <div class="dropdown">
            <button onclick="toggleDropdown('dropdown1')">Modulo Usuario</button>
            <div id="dropdown1" class="dropdown-content">
                <form action="index.php?action=insertUser" method="GET">
                    <button type="submit" name="action" value="insertUser">Registro Usuario</button>
                </form>

                <form action="index.php?action=openFormUpdateU" method="GET">
                    <button type="submit" name="action" value="openFormUpdateU">Actualizar Usuario</button>
                </form>

                <form action="index.php?action=openFormDeleteUser" method="GET">
                    <button type="submit" name="action" value="openFormDeleteUser">Eliminar Usuario</button>
                </form>

                <form action="index.php?action=listUser" method="GET">
                    <button type="submit" name="action" value="listUser">Listado Usuarios</button>
                </form>

                <form action="index.php?action=searchUserByName" method="GET">
                    <button type="submit" name="action" value="searchUserByName">Consulta Numero Documento</button>
                </form>
                
            </div>
        </div>
        
        <!-- Botón 2 -->
        <div class="dropdown">
            <button onclick="toggleDropdown('dropdown2')">Modulo Producto</button>
            <div id="dropdown2" class="dropdown-content">
                <form action="index.php?action=insertProduct" method="GET">
                    <button type="submit" name="action" value="insertProduct">Registro Producto</button>
                </form>

                <form action="index.php?action=openFormUpdateP" method="GET">
                    <button type="submit" name="action" value="openFormUpdateP">Actualizar Producto</button>
                </form>

                <form action="index.php?action=openFormDeleteP" method="GET">
                    <button type="submit" name="action" value="openFormDeleteP">Eliminar Producto</button>
                </form>

                <form action="index.php?action=listProduct" method="GET">
                    <button type="submit" name="action" value="listProduct">Lista de Productos</button>
                </form>

                <form action="index.php?action=searchProductByCode" method="GET">
                    <button type="submit" name="action" value="searchProductByCode">Consulta Codigo Producto</button>
                </form>

            </div>
        </div>
        
        <!-- Botón 3 -->
        <div class="dropdown">
            <button onclick="toggleDropdown('dropdown3')">Modulo Factura</button>
            <div id="dropdown3" class="dropdown-content">
                <form action="index.php?action=insertInvoice" method="GET">
                    <button type="submit" name="action" value="insertInvoice">Registro Factura</button>
                </form>

                <form action="index.php?action=openFormUpdateF" method="GET">
                    <button type="submit" name="action" value="openFormUpdateF">Actualizar Clase Producto</button>
                </form>

                <form action="index.php?action=openFormDeleteF" method="GET">
                    <button type="submit" name="action" value="openFormDeleteF">Eliminar Clase Producto</button>
                </form>

                <form action="index.php?action=listInvoice" method="GET">
                    <button type="submit" name="action" value="listInvoice">Lista de Facturas </button>
                </form>

                <form action="index.php?action=searchInvoiceByDocument" method="GET">
                    <button type="submit" name="action" value="searchInvoiceByDocument">Consulta por Usuario</button>
                </form>

                <form action="index.php?action=searchTypeDocumentByDate" method="GET">
                    <button type="submit" name="action" value="searchTypeDocumentByDate">Consulta por Fecha</button>
                </form>
            

            </div>
        </div>

        <!-- Botón 4 -->
        <div class="dropdown">
            <button onclick="toggleDropdown('dropdown4')">Tipo Documento</button>
            <div id="dropdown4" class="dropdown-content">
                <form action="index.php?action=insertTypeDocument" method="GET">
                    <button type="submit" name="action" value="insertTypeDocument">Registro Tipo Documento</button>
                </form>

                <form action="index.php?action=openFormUpdateType" method="GET">
                    <button type="submit" name="action" value="openFormUpdateType">Actualizar Tipo Documento</button>
                </form>

                <form action="index.php?action=openFormDeleteType" method="GET">
                    <button type="submit" name="action" value="openFormDeleteType">Eliminar Tipo Documento</button>
                </form>

                <form action="index.php?action=listTypeDocument" method="GET">
                    <button type="submit" name="action" value="listTypeDocument">Lista de Tipo Documento </button>
                </form>

                <form action="index.php?action=searchTypeDocumentByName" method="GET">
                    <button type="submit" name="action" value="searchTypeDocumentByName">Consulta por Nombre</button>
                </form>

            </div>
        </div>

        <!-- Botón 5 -->
        <div class="dropdown">
            <button onclick="toggleDropdown('dropdown5')">Clase Producto</button>
            <div id="dropdown5" class="dropdown-content">
                <form action="index.php?action=insertClassProduct" method="GET">
                    <button type="submit" name="action" value="insertClassProduct">Registro Clase Producto</button>
                </form>

                <form action="index.php?action=openFormUpdate" method="GET">
                    <button type="submit" name="action" value="openFormUpdate">Actualizar Clase Producto</button>
                </form>

                <form action="index.php?action=openFormDelete" method="GET">
                    <button type="submit" name="action" value="openFormDelete">Eliminar Clase Producto</button>
                </form>

                <form action="index.php?action=listClassProduct" method="GET">
                    <button type="submit" name="action" value="listClassProduct">Lista de Clases de Productos</button>
                </form>

                <form action="index.php?action=searchClassProductByName" method="GET">
                    <button type="submit" name="action" value="searchClassProductByName">Consulta por Nombre</button>
                </form>

            </div>
        </div>
    </div>

    <script src="./js/menu.js?v=1"></script>
</body>
</html>