<?php

session_start();

var_dump($_SESSION);

$_SESSION['Test Page 2'] = 'OK';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Session Page 2</h1>
    

    <a href="../session.php">Link zu Page 1</a>
</body>
</html>