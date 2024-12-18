<?php

require_once './controllers/userController.php';
require_once './controllers/productController.php';
require_once './controllers/invoiceController.php';
require_once './controllers/typeDocumentController.php';
require_once './controllers/classProductController.php';
//require_once './views/insert_user.php';


$userController = new UserController();
$productController = new ProductController();
$invoiceController = new InvoiceController();
$typeDocumentController = new typeDocumentController();
$classProductController = new classProductController();


$action = $_GET['action'] ?? 'dashboard';


switch($action){

        //Opciones Usuario
    case 'insertUser';
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $userController->insertUser();

        }else{

            include './views/insertUser.php';
        }
        break;

    case"openFormUpdateU";
        $users = $userController->listUsersView();
        include './views/listUserByIdUsuUpdate.php';
        break;

        case"searchUserByNameU";
            $users = $userController->usersByNameView();
            $types = $typeDocumentController->listTypeDocument();
            include './views/updateUser.php';
            break;

        case"updateUser";
            $users = $userController->updateUser();
            include './views/DashBoard.php';
            break;


    case"openFormDeleteUser";
        $users = $userController->listUsersView();
    include './views/listUserByIdUsuDelete.php';
    break;

        case"deleteUser";
        $users = $userController->deleteUser();
        include './views/DashBoard.php';
        break;

    case"listUser":
        $users = $userController->listUsersView();
        include './views/listUsersView.php';
        break;

    case"searchUserByName":
        $users = $userController->usersByName();    
        include './views/listUserByName.php';
        break;
        

        //Opciones Productos
    case"insertProduct";

    if($_SERVER["REQUEST_METHOD"] == "POST") {

        $productController->insertProduct();

    }else {
        include './views/insertProduct.php';
    }
    break;

    case"openFormUpdateP":
        $products = $productController->listProductsView();
        include './views/listProductByCodeUpdate.php';
        break;

        case"searchProductByCodeU":
            $products = $productController->productsCodeView();
            $class = $classProductController->listClassProduct();
            include './views/updateProduct.php';
            break;

        case"updateProduct":
            $products = $productController->updatetProduct();
            include './views/DashBoard.php';
            break;

    case"openFormDeleteP":
        $products = $productController->listProductsView();
        include './views/listProductByCodeDelete.php';
        break;

        case"deleteProduct":
            $products = $productController->deleteProduct();
            include './views/DashBoard.php';
            break;

    case"listProduct":
        $products = $productController->listProductsView();
        include './views/listProductsView.php';
        break;

    case"searchProductByCode":
        $products = $productController->productsByCodes();
        include './views/listProductByCode.php';
        break;


        //Opcion factura
    case"insertInvoice":

        $users = $userController->listUsers();
        $products = $productController->listProducts();

        if($_SERVER["REQUEST_METHOD"] == "POST"){

            $invoiceController->insertInvoice();
    
            }else{
        
                include './views/insertInvoice.php';
            }
            break;


    case"openFormUpdateF":
        $invoice = $invoiceController->invoiceByDocument();
        include './views/listInvoiceByDocumentUpdate.php';
        break;

        case"searchInvoiceByDocumentU":
            $invoice = $invoiceController->listInvoiceUpdate();
            include './views/updateInvoice.php';
            break;

        case"updateInvoice":
            $invoice = $invoiceController->updateInvoice();
            include './views/DashBoard.php';
            break;

    case"openFormDeleteF":
        $invoice = $invoiceController->invoiceByDocument();
        include './views/listInvoiceByIdDelete.php';
        break;

        case"deleteInvoice":
            $invoice = $invoiceController->deleteInvoice();
            include './views/DashBoard.php';
            break;

    case"listInvoice":
        $invoice = $invoiceController->listInvioceView();
        include './views/listInvoiceView.php';
        break;

    case"searchInvoiceByDocument":
        $invoice = $invoiceController->invoiceByDocument();
        include './views/listInvoiceByDocument.php';
        break;

    case"searchTypeDocumentByDate":
        $invoice = $invoiceController->invoiceByDateSale();
        include './views/listInvoiceByDateSale.php';
        break;


        //Opciones tipo documento
    case"insertTypeDocument";
    if($_SERVER["REQUEST_METHOD"] == "POST") {

        $typeDocumentController->insertTypeDocument();

    }else {
        include './views/insertTypeDocument.php';
    }
    break;

    case"openFormUpdateType":
        $types = $typeDocumentController->listTypeDocument(); 
        include './views/listTypeDocumentByNameUpdate.php';
        break;

        case"searchTypeDocumentByNameU":
            $types = $typeDocumentController->typeDocumentoByName();
            include './views/updateTypeProduct.php';
            break;

        case"updateType":
            $types = $typeDocumentController->updateTypeDocument();
            include './views/DashBoard.php';
            break;

    case"openFormDeleteType":
        $types = $typeDocumentController->listTypeDocument();
        include './views/listTypeDocumentByNameDelete.php';
        break;

        case"deleteType":
            $types = $typeDocumentController->deleteTypeProduct();
            include './views/DashBoard.php';
            break;
    

    case"listTypeDocument":
        $types = $typeDocumentController->listTypeDocument();
        include 'views/listTypeDocument.php';
        break;

    case "searchTypeDocumentByName":
        $types = $typeDocumentController->typeDocumentoByName();
        include './views/listTypeDocumentByName.php';
        break;


        //Opciones clase productos
    case"insertClassProduct";

    if($_SERVER["REQUEST_METHOD"] == "POST") {

        $classProductController->insertClassProduct();

    }else {
        include './views/insertClassProduct.php';
    }
    break;

    case"openFormUpdate":
        $class = $classProductController->listClassProduct();
        include './views/listClassProductoByNameUpdate.php';
        break;

        case"searchClassProductByNameU":
            $class = $classProductController->ClassProductByName();
            include './views/updateClassProduct.php';
            break;

        case"updateClass":
            $class = $classProductController->updateClassProduct();
            include './views/DashBoard.php';
            break;

    case"openFormDelete":
        $class = $classProductController->listClassProduct();
        include './views/listClassProductByNameDelete.php';
        break;

        case"deleteClass";
        $class = $classProductController->deleteClassProduct();
        include './views/DashBoard.php';
        break;
        
    case"listClassProduct":
        $class = $classProductController->listClassProduct();
        include './views/listClassProduct.php';
        break;

    case "searchClassProductByName":
        $class = $classProductController->ClassProductByName();
        include './views/listClassProductByName.php';
        break;


    default:
        include './views/DashBoard.php';
        break;
}


?>