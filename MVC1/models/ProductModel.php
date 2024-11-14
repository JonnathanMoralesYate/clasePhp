<?php

class ProductModel{

    private $conn;
    private $table= "productos";

public function __construct($db) {
        $this->conn=$db;
    }
//Insercion de datos o registros de productos
public function insertProduct($codeProduct, $brand, $name, $description){
        $query= "INSERT INTO ".$this->table." (codProducto, marca, nombre, descripcion) VALUES( ?, ?, ?, ?)";
        $stmt= $this->conn->prepare($query);
        $stmt->execute([$codeProduct, $brand, $name, $description]);
    }

    //Consulta general de la tabla
    public function getProducts() {
        $query = "SELECT * FROM ".$this->table;
        $stmt = $this->conn->query($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    //Consulta por codigo del producto
    public function getProductsCode($code) {
        $query = "SELECT * FROM ".$this->table." WHERE codProducto LIKE ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute(['%' .$code. '%']);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>