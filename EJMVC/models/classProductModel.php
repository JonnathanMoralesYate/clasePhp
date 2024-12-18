<?php

class classProductModel{

    private $conn;
    private $table= "claseProducto";

    public function __construct($db) {
        $this->conn=$db;
    }
    //Insercion de registros de clase producto
    public function insertClassProduct($product_class) {
        $query= "INSERT INTO ".$this->table." (clase) VALUES(?)"; 
        $stmt= $this->conn->prepare($query);
        $stmt->execute([$product_class]);
    }

    //consulta general tipo documento
    public function getProductClass() {
        $query = "SELECT * FROM ".$this->table;
        $stmt = $this->conn->query($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    //consulta por nombre o iniciales de tipo documento
    public function getProductClassByName($nameClass) {
        $query = "SELECT * FROM ".$this->table." WHERE clase LIKE ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute(['%' .$nameClass. '%']);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    //actualizar clase del producto
    public function updateClass($product_class, $idClass) {
        $query = "UPDATE ".$this->table." SET clase=? WHERE idProduc=?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$product_class, $idClass]);
    }

    //Eliminar clase del producto
    public function deleteClass($idClass) {
        $query = "DELETE FROM ".$this->table." WHERE idProduc=?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$idClass]);
    }

}

?>