<?php

class DatabaseObj {
    private $host = 'localhost';
    private $db_name = 'php_sql';
    private $username = 'root';
    private $password = '';
    public $conn;

    public function getConnection() {
        $this->conn = null;
        try {
            $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->username, $this->password);
        } catch (PDOException $e) {
            echo 'Verbindung fehlgeschlagen: ' . $e->getMessage(); 
        }

        return $this->conn;
    }
}


/* VERWENDUNG
require_once 'DatabaseObj.php';
$database = new Database();
$db = $database->getConnection();
*/

