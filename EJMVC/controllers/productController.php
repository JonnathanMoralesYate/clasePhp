<?php

require_once './models/productModel.php';
require_once './config/ConnectionBDej.php';

class ProductController{

    private $db;
    private $productModel;

    public function dashBoard(){
        require './views/DashBoard.php';
    }

    public function __construct(){

        $database= new database();
        $this->db = $database->getConnetionJ();
        $this->productModel= new ProductModel($this->db);
    }

    public function insertProduct() {
        
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $codeProduct = $_POST['codigoProduc'];
            $classProduct = $_POST['claseProduc'];
            $brand = $_POST['marcaP'];
            $name = $_POST['nombreP'];
            $description = $_POST['descripcionP'];

            $this->productModel->insertProduct($codeProduct, $classProduct, $brand, $name, $description);
            header("Location: index.php?action=dasboard");
        }
    }

    public function listProducts() {
        return $this->productModel->getProducts();
    }

    public function listProductsView() {
        return $this->productModel->getProductsView();
    }

    public function productsByCodes() {
        $code1 = $_GET['codigo1'] ?? '';
        return $this->productModel->getProductsCodeN($code1);
    }

    public function productsCodeView() {
        $code = $_GET['codigo'] ?? '';
        return $this->productModel->getProductsCodeView1($code);
    }

    public function updatetProduct() {
        
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $codeProduct = $_POST['codigoProduc'];
            $classProduct = $_POST['claseProduc'];
            $brand = $_POST['marcaP'];
            $name = $_POST['nombreP'];
            $description = $_POST['descripcionP'];

            $this->productModel->updateProduct($classProduct, $brand, $name, $description, $codeProduct);
            header("Location: index.php?action=dasboard");
        }
    }

    public function deleteProduct() {
        $codeProduct = $_GET['code'] ?? '';
        $this->productModel->getdeleteProduct($codeProduct);
    }

}

?>