<?php

//require_once './views/insert_user.php';
require_once './controllers/UserController.php';
require_once './controllers/ProductController.php';

$userController = new UserController();
$productController = new ProductController();

$action = $_GET['action'] ?? 'dashBoard';

switch($action) {

    case"insertUser";

    if($_SERVER["REQUEST_METHOD"] == "POST") {

        $userController->insertUser(); 

    }else {
        include './views/insert_user.php';
    }
    break;

    case"insertProduct";

    if($_SERVER["REQUEST_METHOD"] == "POST") {

        $productController->insertProduct();

    }else {
        include './views/insert_product.php';
    }
    break;

    case 'listUsers':
        $users = $userController->listUsers();
        include './views/list_users.php';
        break;

    case 'searchUserByName':
        $users = $userController->UsersByName();
        include './';
        break;



    default:
    include './views/DashBoard.php';
    break;


}


?>