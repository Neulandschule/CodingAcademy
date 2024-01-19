<?php
/*
* Fallunterscheidungen
* SWITCH - CASE
*/

$grade = 1;

switch ($grade) {
    case 1:
        echo 'Sehr gut';
        break;
    case 2:
        echo 'Gut';
        break;
    case 3:
        echo 'Befriedigend';
        break;
    case 4:
        echo 'Genügend';
        break;
    case 5:
        echo 'Nicht Genügend';
        break;
    default:
        echo 'Ungültiger Wert';
}

//Ohne Break
/*
switch ($grade) {
    case 1:
        echo 'Sehr gut';
    case 2:
        echo 'Gut';
    case 3:
        echo 'Befriedigend';
    case 4:
        echo 'Genügend';
    case 5:
        echo 'Nicht Genügend';
    default:
        echo 'Ungültiger Wert';
}
*/

//Mit Bedingung
switch ($grade) {
    case ($grade <= 4):
        echo 'Bestanden';
        break;
    case 5:
        echo 'Nicht bestanden';
        break;
}


//Kurzform
$num = 1;
switch ($num):
    case 1:
        echo 'Eins';
        break;
    case 2:
        echo 'zwei';
        break;
endswitch;


/*
* Aufgaben
*
* 1.    Erstelle eine Switch-Abfrage welche der Variable $day_name aufgrund der Zahlen
*       1 - 7 die Namen Montag - Sonntag zuweist. Gib auch einen default-Wert an.
*
*
*/
