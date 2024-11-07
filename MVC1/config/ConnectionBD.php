<?php

class Database{

    private $host="localhost";
    private $db_name="persona";
    private $username="root";
    private $password="";
    public $conn;


    public function getConnection() {
        $this->conn=null;
    

    try {

        $this->conn = new PDO("mysql:host=".$this->host.";dbname=".$this->db_name, $this->username, $this->password);
        $this->conn->exec("set names utf8");

        echo "Conexion Exitosa";

    }catch(PDOException $exeption) {

        echo "Error de Conexion: ". $exeption->getMessage();

    }

    return $this->conn;

}


}



?>