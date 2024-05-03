<?php 

$user = "root";
$pass = "";

try {
    $db = new PDO('mysql:host=localhost;dbname=php_sql', $user, $pass);
} catch (PDOException $e) {
    echo 'Verbindung fehlgeschlagen: ' . $e->getMessage(); 
}