<?php

    $input_text = $_POST['inputtext'] ?? '';

    $invalid_arr = [];

    //Input 1
    if (trim($input_text) == '') {
        $invalid_arr['inputtext'] = "Eingabe fehlt!";
    } else if (strlen($input_text) < 3) {
        $invalid_arr['inputtext'] = "Mindestens 3 Zeichen";
    } else if (!preg_match('/^[A-Z]/', $input_text)) {
        $invalid_arr['inputtext'] = "Muss mit einem Großbuchstaben anfangen.";
    }

    $msg = '';
    if (isset($_POST['submit'])) {
        if (empty($invalid_arr)) {
            $msg = "Formular verarbeitet.";
        } else {
            $msg = "Formulareingabe fehlerheft";
        }
    }


    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <h1>Formulare</h1>

    <form id="myForm" action="06_Validierung.php" method="POST">
        <!-- Text -->
        <p>
            <label for="text_id">Input</label>
            <input type="text" id="text_id" name="inputtext" value="<?php echo $input_text ?>">
            <?php
                if (array_key_exists('inputtext', $invalid_arr)) {
                    echo '<div class="error">';
                    echo $invalid_arr['inputtext'];
                    echo '</div>';
                }
            ?>
        </p>
        <p>
            <input type="submit" value="Formular senden" name="submit">
        </p>
        <p>
            <?php echo $msg ?>
        </p>
    </form>



    <?php echo $input_text ?>

</body>
</html>