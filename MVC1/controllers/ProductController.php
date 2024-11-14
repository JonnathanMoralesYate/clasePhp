<?php

require_once './models/ProductModel.php';
require_once './config/ConnectionBD.php';

class ProductController{

    private $db;
    private $productModel;

    public function dashBoard(){
        require './views/DashBoard.php';
    }

    public function __construct(){

        $database= new Database();
        $this->db = $database->getConnection();
        $this->productModel= new ProductModel($this->db);
    }

    public function insertProduct() {
        
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $codeProduct = $_POST['codProducto'];
            $brand = $_POST['marcaP'];
            $name = $_POST['nombreP'];
            $description = $_POST['descripcionP'];

            $this->productModel->insertProduct($codeProduct, $brand, $name, $description);
            header("Location: index.php?action=dasboard");
        }
    }

    public function listProducts() {
        return $this->productModel->getProducts();
    }

    public function ProductsCode($code) {
        $code = $_GET['codigo'] ?? '';
        return $this->productModel->getProductsCode($code);
    }

}

?>