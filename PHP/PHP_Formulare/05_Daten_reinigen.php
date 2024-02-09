<?php
    #<script>alert('Hi')</script>
    # tim(@)tes ter.at
    #https://www.php.net/manual/en/filter.filters.sanitize.php

    #var_dump($_POST);

    $input_text = $_POST['inputtext'] ?? '';

    #$input_text = htmlentities($input_text); 
    #$input_text = trim($input_text); 
    #$input_text = filter_var($input_text, FILTER_SANITIZE_EMAIL); 
    echo strlen($input_text);
    

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

    <form id="myForm" action="05_Daten_reinigen.php" method="POST">
        <!-- Text -->
        <p>
            <label for="text_id">Input</label>
            <input type="text" id="text_id" name="inputtext" value="<?php echo $input_text ?>">
        </p>
        <p>
            <input type="submit" value="Formular senden">
        </p>
    </form>



    <?php echo $input_text ?>

</body>
</html>