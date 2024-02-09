<?php

    # 1. Action auf eigenes Doument
    # 2. Leerdeklarationen
    # 3. Prüfen ob Formular gesendet


    var_dump($_POST);

    $input_text = '';

    if (isset($_POST['submit'])) {
        $input_text = $_POST['inputtext'];
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
    <h1>Formulare</h1>

    <form id="myForm" action="02_php_in_html.php" method="POST">
        <label for="text_id">Input</label>
        <input type="text" id="text_id" name="inputtext">
        <p>
            <input type="submit" value="Formular senden" name="submit">
        </p>
    </form>

    <?php echo $input_text ?>
</body>
</html>