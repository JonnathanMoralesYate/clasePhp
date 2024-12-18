<?php

class UserModel{

    private $conn;
    private $table= "usuarios";

    public function __construct($db) {
        $this->conn=$db;
    }
    //Insercion de datos o registros de usuarios
    public function insertUser($document_number, $document_type, $name, $phone, $photo) {
        $query = "INSERT INTO ".$this->table." (numero_documento, tipo_documento, nombre, telefono, foto) VALUES( ?, ?, ?, ?, ?)";
        $stmt= $this->conn->prepare($query);
        $stmt->execute([$document_number, $document_type, $name, $phone, $photo]);
    }
    //Consulta general de la tabla
    public function getUsers() {
        $query = "SELECT * FROM ".$this->table;
        $stmt = $this->conn->query($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    //Consulta por parametro
    public function getUsersByName($name) {
        $query = "SELECT * FROM ".$this->table." WHERE nombre LIKE ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute(['%'.$name. '%']);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }



}

?>