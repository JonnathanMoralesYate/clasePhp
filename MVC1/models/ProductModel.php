<?php

class ProductModel{

    private $conn;
    private $table= "productos";

public function __construct($db) {
        $this->conn=$db;
    }

public function insertProduct($codeProduct, $brand, $name, $description){
        $query= "INSERT INTO ".$this->table." (codProducto, marca, nombre, descripcion) VALUES( ?, ?, ?, ?)";
        $stmt= $this->conn->prepare($query);
        $stmt->execute([$codeProduct, $brand, $name, $description]);
    }
}

?>