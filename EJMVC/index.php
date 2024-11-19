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

    case"listProduct":
        $products = $productController->listProductsView();
        include './views/listProductsView.php';
        break;

    case"searchProductByCode":
            $products = $productController->productsCode();
        include './views/listProductByCode.php';
        break;


        //Opcion factura
    case"insertInvoice":

        if($_SERVER["REQUEST_METHOD"] == "POST"){

            $invoiceController->insertInvoice();
    
            }else{
    
                include './views/insertInvoice.php';
            }
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