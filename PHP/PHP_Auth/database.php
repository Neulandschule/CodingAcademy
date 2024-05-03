<?php

$host = "localhost";
$database = "auth";
$name = "root";
$pwd = "";

try {
    $db = new PDO("mysql:host=$host;dbname=$database", $name, $pwd);
} catch (PDOException $e) {
    die($e->getMessage());
}