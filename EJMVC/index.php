<?php
//require_once './views/insert_user.php';
require_once './controllers/UserController.php';

$userController = new UserController();

$action = $_GET['action'] ?? 'dashboard';


switch($action){

    case 'insertUser';
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $userController->insertUser();

        }else{

            include './views/insert_user.php';
        }
        break;

    

    default:
        include './views/DashBoard.php';
        break;
}


?>