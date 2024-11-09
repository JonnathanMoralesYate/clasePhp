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



    default:
    include './views/DashBoard.php';
    break;


}


?>