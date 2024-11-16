<?php

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
        include './views/list_user_By_Name_Form.php';
        break;

    case 'listProducts':
        $products = $productController->listProducts();
        include './views/list_products.php';
        break;
    
    case 'searchProductsCode':
        $products = $productController->ProductsCode();
        include './views/list_products_code.php';
        break;

    default:
    include './views/DashBoard.php';
    break;

}


?>