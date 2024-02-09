<?php

    var_dump($_POST);

    $input_text = $_POST['inputtext'] ?? '';
    $pwd = $_POST['pwd'] ?? '';
    $color = $_POST['color'] ?? '';
    $date = $_POST['datum'] ?? '';
    $token = $_POST['token'] ?? '';
    $text = $_POST['mein_text'] ?? '';
    if (isset($ext)) {
        $text = nl2br($text);
    }
    $select = $_POST['mySelect'] ?? '';
    $multiselect = $_POST['multiselect'] ?? [];

    $radio = $_POST['radio'] ?? '';
    $check = $_POST['myCheckbox'] ?? '';


    

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

    <form id="myForm" action="04_old_values.php" method="POST">
        <!-- Text -->
        <p>
            <label for="text_id">Input</label>
            <input type="text" id="text_id" name="inputtext" value="<?php echo $input_text ?>">
        </p>

        <!-- Password -->
        <p>
            <label for="pwd_id">Passwort</label>
            <input type="password" id="pwd_id" name="pwd" value="<?= $pwd ?>">
        </p>

        <!-- Color -->
        <p>
            <label for="color_id">Farbe</label>
            <input type="color" id="color_id" name="color" value="<?= $color ?>">
        </p>

        <!-- Color -->
        <p>
            <label for="date_id">Datum</label>
            <input type="date" id="date_id" name="datum" value="<?= $date ?>">
        </p>

        <!-- Hidden -->
        <p>
            <label for="hidden_id">Versteckte Elemente</label>
            <input type="hidden" id="hidden_id" name="token" value="123456789">
        </p>

        <!-- Textarea -->
        <p>
            <label for="textarea_id">Versteckte Elemente</label>
            <textarea name="mein_text" id="textarea_id" cols="30" rows="3"><?= $text ?></textarea>
        </p>

        <!-- Selectbox -->
        <p>
            <label for="select_id">Versteckte Elemente</label>
            <select name="mySelect" id="select_id">
                <option value="val_1" <?php echo ($select == 'val_1') ? 'selected' : '' ?> >Value 1</option>
                <option value="val_2" <?= ($select == 'val_2') ? 'selected' : '' ?>>Value 2</option>
            </select>
        </p>

        <!-- Selectbox -->
        <p>
            <label for="multiselect_id">Versteckte Elemente</label>
            <select name="multiselect[]" id="multiselect_id" multiple>
                <option value="multi_1" <?= (in_array('multi_1', $multiselect)) ? 'selected' : '' ?> >Multi 1</option>
                <option value="multi_2" <?= (in_array('multi_2', $multiselect)) ? 'selected' : '' ?>>Multi 2</option>
            </select>
        </p>

        <!-- Radio -->
        <p>
            <input type="radio" id="rad_1" value="rad_1_value" name="radio" <?= ($radio == 'rad_1_value') ? 'checked' : '' ?> checked>
            <label for="rad_1" >Radio 1</label>
            
            <br>
            <input type="radio" id="rad_2" value="rad_2_value" name="radio" <?= ($radio == 'rad_2_value') ? 'checked' : '' ?> >
            <label for="rad_2">Radio 1</label>
        </p>

        <!-- Checkbox -->
        <p>
            <input type="checkbox" id="check_id" value="check1" name="myCheckbox" <?= ($check == 'check1') ? 'checked' : '' ?>>
            <label for="check_id">Meine Checkbox</label>
        </p>
        
        <p>
            <input type="submit" value="Formular senden">
        </p>

    </form>

    <?php echo $input_text ?>
    <?php echo $text ?>

    <?php
        foreach ($multiselect as $value) {
            echo $value;
        }
    ?>

    <?php
        if ($check == 'check1') {
            echo "Checkbox wurde ausgewählt";
        }
    ?>
</body>
</html>