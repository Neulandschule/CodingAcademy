<?php

require_once 'database.php';

$status = '';
$show_edit = false;

#CREATE
if (isset($_POST['btnCreate'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $sql = "INSERT INTO users (firstname, lastname) VALUES ('". $firstname . "',  '" . $lastname . "')";
    echo $sql;
    $stmt = $db->exec($sql);

}

#INSERT INTO users (firstname, lastname) VALUES ("Tim", "Tester"); TRUNCATE TABLE users; #)
#HACK SQL Injection: 
#'); TRUNCATE TABLE users; #
#HACK JavaScript Injection
#<script>alert(\'oohh\');</script>
#<script>location.href = \'http://www.google.com\';</script>


#READ
$sql = "SELECT * FROM users";
$stmt = $db->query($sql);
$data = $stmt->fetchAll();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>CREATE</h1>
    <form action="crud_hack.php" method="POST">
        <label for="fn">Vorname</label>
        <input type="text" id="fn" name="firstname">
        <label for="fn">Nachname</label>
        <input type="text" id="ln" name="lastname">
        <input type="submit" name="btnCreate">
    </form>
    
    <h1>READ</h1>
    <?php
        foreach($data as $user) {
            echo $user['firstname'] . ' ' . $user['lastname'];
            echo "<br>";
        }
    ?>

    <?= $status ?>

    <hr>

    <h2>SQL Injection</h2>
    <code>
        Tester'); TRUNCATE TABLE users; #
    </code>

    <h2>Java Script Injection</h2>
    <code>
        &lt;script>alert(\'oohh\');&lt;/script>   
    </code>
    <br>
    <code>
        &lt;script>location.href = \'http://www.google.com\';&lt;/script>
    </code>

    

</body>
</html>
