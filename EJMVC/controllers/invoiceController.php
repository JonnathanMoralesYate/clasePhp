<?php

require_once './models/invoiceModel.php';
require_once './config/ConnectionBDej.php';

class InvoiceController{

    private $db;
    private $invoiceModel;

    public function dashBoard() {
        //carga la vista principal de modulo
        require './views/DashBoard.php';
    }

    public function __construct() {

        $database= new database();
        $this->db = $database->getConnetionJ();
        $this->invoiceModel = new InvoiceModel($this->db);
    }

    public function insertInvoice() {

        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $document_number = $_POST['numero_documento'];
            $product_code = $_POST['codigoProduc'];
            $date = $_POST['fechaV'];
            $quantity = $_POST['cantidadP'];
            
            $this->invoiceModel->insertInvoice($document_number, $product_code, $date, $quantity);
            header("Location: index.php?action=dasboard");
        }
    }

    public function listInvoice() {
        return $this->invoiceModel->getInvoice();
    }

    public function listInvoiceUpdate() {
        $idInvoice = $_GET['idFactura'] ?? '';
        return $this->invoiceModel->getInvoiceByIdInvoice($idInvoice);
    }

    public function listInvioceView() {
        return $this->invoiceModel->getInvoiceView();
    }

    public function invoiceByDocument() {
        $documentNumber = $_GET['numDocument'] ?? '';
        return $this->invoiceModel->getInvoiceByDocument($documentNumber);
    }

    public function invoiceByDateSale() {
        $date_sale = $_GET['fechaV'] ?? '';
        return $this->invoiceModel->getInvoiceByDateSale($date_sale);
    }

    public function updateInvoice() {
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $idInvoice = $_POST['idFactura'];
            $document_number = $_POST['numero_documento'];
            $product_code = $_POST['codigoProduc'];
            $date = $_POST['fechaV'];
            $quantity = $_POST['cantidadP'];
            
            $this->invoiceModel->updateInvoice($document_number, $product_code, $date, $quantity, $idInvoice);
            header("Location: index.php?action=dasboard");
        }
    }

    public function deleteInvoice() {
        $idInvoice = $_GET['idFactura'] ?? '';
        $this->invoiceModel->deleteByIdInvoice($idInvoice);
    }
}

?>