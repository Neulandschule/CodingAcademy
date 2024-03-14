<?php
include_once "Player.php";
include_once "Human.php";
include_once "Orc.php";
include_once "Ring.php";
include_once "Data_Manager.php";

$info = '';
$end = false;


if (isset($_POST['btnStart'])) {

    $p1_ring = new Ring($_POST['p1_ring']);
    $p2_ring = new Ring($_POST['p2_ring']);

    switch($_POST['p1_race']) {
        case 'human': $p1 = new Human($_POST['p1_name'], $p1_ring); break;
        case 'orc': $p1 = new Orc($_POST['p1_name'], $p1_ring); break;
    }
    switch($_POST['p2_race']) {
        case 'human': $p2 = new Human($_POST['p2_name'], $p2_ring); break;
        case 'orc': $p2 = new Orc($_POST['p2_name'], $p2_ring); break;
    }

    $round = rand(1, 2);
} else {
    $p1 = Data_Manager::loadPlayer(1);
    $p2 = Data_Manager::loadPlayer(2);
    if (isset($_POST['p1_attack'])) {
        $info .= "$p1->name greift $p2->name an. <br>";
        $attack_value = $p1->getAttackValue();
        $info .= $p2->attack($attack_value);
        $round = 2;
    }
    if (isset($_POST['p2_attack'])) {
        $info .= "$p2->name greift $p1->name an. <br>";
        $attack_value = $p2->getAttackValue();
        $info .= $p1->attack($attack_value);
        $round = 1;
    }
}

if ($p1->getHealth() < 0) {
    $info .= "$p2->name hat gewonnen";
    $end = true;
}
if ($p2->getHealth() < 0) {
    $info .= "$p1->name hat gewonnen";
    $end = true;
}

Data_Manager::savePlayer(1, $p1);
Data_Manager::savePlayer(2, $p2);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <h1><?= $p1->name ?></h1>
    Rasse: <?= get_class($p1) ?><br>
    Gesundheit: <?= $p1->getHealth() ?><br>
    Stärke: <?= $p1->getStrength() ?><br>
    Ring: <?= $p1->ring->toString() ?>
    <form action="game.php" method="POST">
        <input type="submit" name="p1_attack" value="Angriff" <?php if ($end || $round == 2) echo 'disabled' ?>>
    </form>

    <h1><?= $p2->name ?></h1>
    Rasse: <?= get_class($p2) ?><br>
    Gesundheit: <?= $p2->getHealth() ?><br>
    Stärke: <?= $p2->getStrength() ?><br>
    Ring: <?= $p2->ring->toString() ?>
    <form action="game.php" method="POST">
        <input type="submit" name="p2_attack" value="Angriff" <?php if ($end || $round == 1) echo 'disabled' ?>>
    </form>

    <br><hr>
    <?= $info ?>
    <?php if($end): ?>
    <form action="index.html" method="GET">
        <input type="submit" value="Neues Spiel">
    </form>
    <?php endif ?>

</head>
<body>
    
</body>
</html>