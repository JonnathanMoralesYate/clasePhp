<?php

require_once './models/typeDocumentModel.php';
require_once './config/ConnectionBDej.php';

class typeDocumentController{

    private $db;
    private $typeDocumentModel;

    public function dashBoard() {
        require './views/DashBoard.php';
    }

    public function __construct() {

        $database = new database();
        $this->db = $database->getConnetionJ();
        $this->typeDocumentModel = new typeDocumentModel($this->db);
    }

    public function insertTypeDocument() {
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $document_type = $_POST['tipo_documento'];

            $this->typeDocumentModel->insertTypeDocument($document_type);
            header("Location: index.php?action=dashboard");
        }
    }

    public function listTypeDocument() {
        return $this->typeDocumentModel->getDocumentType();
    }

    public function typeDocumentoByName() {
        $name = $_GET['nombre'] ?? '';
        return $this->typeDocumentModel->getDocumentTypeByName($name);
    }
    
}

?>