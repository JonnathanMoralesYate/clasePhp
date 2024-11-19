<?php

require_once './models/UserModel.php';
require_once './config/ConnectionBDej.php';

class UserController{

    private $db;
    private $userModel;

    public function dashBoard() {
        //carga la vista principal de modulo
        require './views/DashBoard.php';
    }

    public function __construct() {

        $database= new database();
        $this->db = $database->getConnetionJ();
        $this->userModel= new UserModel($this->db);
    }

    public function insertUser() {

        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $document_number = $_POST['numero_documento'];
            $document_type = $_POST['tipoDocum'];
            $name = $_POST['nombre'];
            $phone = $_POST['telefono'];
            
            $this->userModel->insertUser($document_number, $document_type, $name, $phone);
            header("Location: index.php?action=dasboard");
        }
    }

    public function listUsers() {
        return $this->userModel->getUsers();
    }

    public function listUsersView() {
        return $this->userModel->getUsersView();
    }

    public function usersByName() {
        $name = $_GET['name'] ?? '';
        return $this->userModel->getUsersByName($name);
    }


}



?>