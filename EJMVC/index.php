<?php

require_once './controllers/typeDocumentController.php';
require_once './controllers/classProductController.php';
//require_once './views/insert_user.php';
//require_once './controllers/UserController.php';

//$userController = new UserController();
$typeDocumentController = new typeDocumentController();
$classProductController = new classProductController();


$action = $_GET['action'] ?? 'dashboard';


switch($action){

    // case 'insertUser';
    // if($_SERVER["REQUEST_METHOD"] == "POST"){

    //     $userController->insertUser();

    //     }else{

    //         include './views/insert_user.php';
    //     }
    //     break;





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