<?php

    # Formular (POST, ENCTYPE)
    # Input (file)
    # PHP.ini file_upload=On

    if (isset($_POST['submit'])) {
        echo "<pre>";
        var_dump($_FILES);
        echo "</pre>";

        $from = $_FILES['myFile']['tmp_name'];
        $to = 'upload/' . $_FILES['myFile']['name'];
        move_uploaded_file($from, $to);
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

    <form id="myForm" action="07_Datei_upload.php" method="POST" enctype='multipart/form-data'>
        <p>
            <label for="text_id">Datei:</label>
            <input type="file" id="text_id" name="myFile" >
        </p>
        <p>
            <input type="submit" value="Formular senden" name="submit">
        </p>

    </form>




</body>
</html>