<?php

class typeDocumentModel{

    private $conn;
    private $table= "tipoDocumento";

    public function __construct($db) {
        $this->conn=$db;
    }
    //Insercion de registros de tipo documento
    public function insertTypeDocument($document_type) {
        $query= "INSERT INTO ".$this->table." (documento) VALUES(?)"; 
        $stmt= $this->conn->prepare($query);
        $stmt->execute([$document_type]);
    }

    //consulta general tipo documento
    public function getDocumentType() {
        $query = "SELECT * FROM ".$this->table;
        $stmt = $this->conn->query($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC); //método devuelve un array con fetchAll(PDO::FETCH_ASSOC)
    }

    //consulta por nombre o iniciales de tipo documento
    public function getDocumentTypeByName($name) {
        $query = "SELECT * FROM ".$this->table." WHERE documento LIKE ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute(['%' .$name. '%']);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    //actualizar clase del producto
    public function updateType($document_type, $idType) {
        $query = "UPDATE ".$this->table." SET documento=? WHERE idDocum=?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$document_type, $idType]);
    }

    //Eliminar clase del producto
    public function deleteType($idType) {
        $query = "DELETE FROM ".$this->table." WHERE idDocum=?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$idType]);
    }



}

?>