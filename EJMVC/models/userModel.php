<?php

class UserModel{

    private $conn;
    private $table= "usuarios";

    public function __construct($db) {
        $this->conn=$db;
    }
    //Insercion de datos o registros de usuarios
    public function insertUser($document_number, $document_type, $name, $phone) {
        $query = "INSERT INTO ".$this->table." (idUsua, idDocum, nombre, celular) VALUES( ?, ?, ?, ?)";
        $stmt= $this->conn->prepare($query);
        $stmt->execute([$document_number, $document_type, $name, $phone]);
    }
    //Consulta general de la tabla
    public function getUsers() {
        $query = "SELECT * FROM ".$this->table;
        $stmt = $this->conn->query($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    //consulta general con inner join
    public function getUsersView() {
        $query = "SELECT tipoDocumento.documento, idUsua, nombre, celular FROM ".$this->table." INNER JOIN tipoDocumento ON usuarios.idDocum = tipoDocumento.idDocum";
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