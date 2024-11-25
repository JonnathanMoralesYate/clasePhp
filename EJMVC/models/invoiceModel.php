<?php

class InvoiceModel{

    private $conn;
    private $table= "factura";

    public function __construct($db) {
        $this->conn=$db;
    }

    //Insercion de datos o registros de usuarios
    public function insertInvoice($document_number, $product_code, $date, $quantity) {
        $query = "INSERT INTO ".$this->table." (idUsua, codProducto, fecha, cantidad) VALUES( ?, ?, ?, ?)";
        $stmt= $this->conn->prepare($query);
        $stmt->execute([$document_number, $product_code, $date, $quantity]);
    }

    //Consulta general de la tabla
    public function getInvoice() {
        $query = "SELECT * FROM ".$this->table;
        $stmt = $this->conn->query($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    //Consulta para traer datos para actualizar factura
    public function getInvoiceByIdInvoice($idInvoice) {
        $query = "SELECT * FROM ".$this->table." WHERE idFactura=?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$idInvoice]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    //consulta inner join
    public function getInvoiceView() {
        $query = "SELECT idFactura, usuarios.idUsua, usuarios.nombre AS 'Nombre Cliente', productos.nombre AS 'Nombre Producto', productos.marca, productos.descripcion, fecha, cantidad FROM ".$this->table." INNER JOIN usuarios ON factura.idUsua = usuarios.idUsua INNER JOIN productos ON factura.codProducto = productos.codProducto";
        $stmt = $this->conn->query($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    //Consulta por parametro numero identificacion usuario
    public function getInvoiceByDocument($documentNumber) {
        $query = "SELECT * FROM ".$this->table." WHERE idUsua LIKE ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute(['%'.$documentNumber. '%']);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    //Consulta por parametro fecha
    public function getInvoiceByDateSale($dateSale) {
        $query = "SELECT * FROM ".$this->table." WHERE fecha LIKE ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute(['%'.$dateSale. '%']);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    //Actualizar datos de factura
    public function updateInvoice($document_number, $product_code, $date, $quantity, $idInvoice) {
        $query = "UPDATE ".$this->table." SET idUsua=?, codProducto=?, fecha=?, cantidad=? WHERE idFactura=?";
        $stmt= $this->conn->prepare($query);
        $stmt->execute([$document_number, $product_code, $date, $quantity, $idInvoice]);
    }

    //Eliminar factura
    public function deleteByIdInvoice($idInvoice) {
        $query = "DELETE FROM ".$this->table." WHERE idFactura=?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$idInvoice]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}

?>