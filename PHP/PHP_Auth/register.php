<?php
include "database.php";

session_start();
if (!isset($_SESSION['auth'])) {
    header("loaction: welcome.php");
    exit();
}

$username = $email = $pwd = $pwd_confirm = "";
$errors = [];

if (isset($_POST['register'])) {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $pwd = trim($_POST['pwd']);
    $pwd_confirm = trim($_POST['pwd_confirm']);

    if ($username == '' || $email == '' || $pwd == '' || $pwd_confirm == '') {
        array_push($errors, 'Eingabe fehlt');
    }
    else {
        $sql = "SELECT id FROM users WHERE username = ? OR email = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$username, $email]);
        $data = $stmt->fetchAll();

        if (!empty($data)) {
            array_push($errors, "Username/Email bereits vorhanden.");
        }

        if ($pwd != $pwd_confirm) {
            array_push($errors, "Passwort stimmt nicht überein.");
        }
    }

    if (empty($errors)) {
        $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?);";
        $stmt = $db->prepare($sql);
        if ($stmt->execute([$username, $email, password_hash($pwd, PASSWORD_DEFAULT)])) {
            header("location: login.php");
        } else {
            array_push($errors, "Fehler beim speichern.");
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Registrierung</h2>

    <form action="register.php" method="POST">
        <p>
            <label for="username">Benutzername</label>
            <input type="text" id="username" name="username">
        </p>
        <p>
            <label for="email">E-Mail</label>
            <input type="text" id="email" name="email">
        </p>
        <p>
            <label for="pwd">Passwort</label>
            <input type="password" id="pwd" name="pwd">
        </p>
        <p>
            <label for="pwd_confirm">Passwort bestätigen</label>
            <input type="password" id="pwd_confirm" name="pwd_confirm">
        </p>
        <p>
            <input type="submit" name="register" value="Anmeldung">
        </p>

        <p>
            <?php
                foreach($errors as $error) {
                    echo $error . "<br>";
                }
            ?>
        </p>
    </form>
</body>
</html>