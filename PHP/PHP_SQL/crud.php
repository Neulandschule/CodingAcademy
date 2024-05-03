<?php

require_once 'database.php';



/* 
* TABELLE ERSTELLEN
* https://www.w3schools.com/sql/sql_create_table.asp
*/

/*
$sql = "CREATE TABLE users (
    id INTEGER PRIMARY KEY NOT NULL auto_increment,
    firstname VARCHAR(255),
    lastname VARCHAR(255)
);";

$db->exec($sql);
echo "Tabelle erstellt";
*/


/*
*  CREATE
*/

# Variante 1
/*
$sql = "INSERT INTO users (firstname, lastname) VALUES ('Tim', 'Tester')";
$db->exec($sql);
*/

# Variante 2
/*
$sql = "INSERT INTO users (firstname, lastname) VALUES (:fn, :ln)";
$stmt = $db->prepare($sql);
$fn = "Tom";
$ln = "Tester";
$stmt->bindParam(":fn", $fn);
$stmt->bindParam(":ln", $ln);
$stmt->execute();
*/

// Variante 3
/*
$sql = "INSERT INTO users (firstname, lastname) VALUES (?, ?)";
$stmt = $db->prepare($sql);
$stmt->execute(['Tina', 'Tester']);
*/


/*
*  READ
*/

/*
$sql = "SELECT * FROM users";
$stmt = $db->query($sql);
#$data = $stmt->fetch(); #Nur ein Datensatz
$data = $stmt->fetchAll();

echo "<pre>";
var_dump($data);
echo "</pre>";

foreach ($data as $row) {
    echo $row[1];
    #echo $row['firstname'];
}
*/


/*
*  UPDATE
*/

/*
$sql = "UPDATE users SET firstname = ? WHERE id = ?";
$stmt = $db->prepare($sql);
$stmt->execute(['Tanja', 3]);
*/

/*
*  DELETE
*/

/*
$sql = "DELETE FROM users WHERE id = ?";
$stmt = $db->prepare($sql);
$stmt->execute([2]);
*/