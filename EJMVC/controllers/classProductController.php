<?php

require_once './models/classProductModel.php';
require_once './config/ConnectionBDej.php';

class classProductController{

    private $db;
    private $classProductModel;

    public function dashBoard() {
        require './views/DashBoard.php';
    }

    public function __construct() {
        $database = new database();
        $this->db = $database->getConnetionJ();
        $this->classProductModel = new classProductModel($this->db);
    }

    public function insertClassProduct() {
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $product_class = $_POST['clase_producto'];

            $this->classProductModel->insertClassProduct($product_class);
            header("Location: index.php?action=dashboard");
        }
    }

    public function listClassProduct() {
        return $this->classProductModel->getProductClass();
    }

    public function ClassProductByName() {
        $nameClass = $_GET['nombre_clase'] ?? '';
        return $this->classProductModel->getProductClassByName($nameClass);
    }
    
}


?>