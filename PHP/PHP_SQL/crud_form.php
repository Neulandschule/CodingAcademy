<?php

require_once 'database.php';

$status = '';
$show_edit = false;

#CREATE
if (isset($_POST['btnCreate'])) {
    $firstname = htmlentities($_POST['firstname']);
    $lastname = htmlentities($_POST['lastname']);
    $sql = "INSERT INTO users (firstname, lastname) VALUES (?, ?)";
    $stmt = $db->prepare($sql);
    if ($stmt->execute([$firstname, $lastname])) {
        $status = "Datensatz hinzugefügt.";
    };
}

#UPDATE
if (isset($_POST['btnSelectEdit'])) {
    $id = $_POST['edit_id'];
    $sql = "SELECT * FROM users WHERE id = ?";
    $stmt = $db->prepare($sql);
    $stmt->execute([$id]);
    $data_edit = $stmt->fetch();

    $show_edit = true;
}

if (isset($_POST['btnUpdate'])) {
    $id = $_POST['edit_id'];
    $firstname = htmlentities($_POST['firstname']);
    $lastname = htmlentities($_POST['lastname']);
    $sql = "UPDATE users SET firstname = ?, lastname = ? WHERE id = ?";
    $stmt = $db->prepare($sql);
    if ($stmt->execute([$firstname, $lastname, $id])) {
        $status = "Datensatz bearbeitet.";
    };
}

#DELTE
if (isset($_POST['btnDelete'])) {
    $id = $_POST['edit_id'];
    $sql = "DELETE FROM users WHERE id = ?";
    $stmt = $db->prepare($sql);
    if ($stmt->execute([$id])) {
        $status = "Datensatz gelöscht.";
    };
}

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
    <form action="crud_form.php" method="POST">
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
            ?>
                <form action="crud_form.php" method="POST">
                    <input type="hidden" name="edit_id" value="<?= $user['id'] ?>">
                    <input type="submit" name="btnSelectEdit" value="Bearbeiten">
                </form>
                <form action="crud_form.php" method="POST">
                    <input type="hidden" name="edit_id" value="<?= $user['id'] ?>">
                    <input type="submit" name="btnDelete" value="Löschen">
                </form>
            <?php
            echo "<br>";
        }
    ?>

    <?php if ($show_edit): ?>

        <h1>UPDATE</h1>
        <form action="crud_form.php" method="POST">
            <input type="hidden" name="edit_id" value="<?= $data_edit['id'] ?>">
            <label for="fn">Vorname</label>
            <input type="text" id="fn" name="firstname" value="<?= $data_edit['firstname'] ?>">
            <label for="fn">Nachname</label>
            <input type="text" id="ln" name="lastname" value="<?= $data_edit['lastname'] ?>">
            <input type="submit" name="btnUpdate">
        </form>

    <?php endif ?>


    <?= $status ?>

</body>
</html>
