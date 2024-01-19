<?php
/*
* Fallunterscheidungen
* Match
*/

//MATCH
$grade = 3;
#$grade = '3';

$grade_written = match ($grade) {
    1 => 'Sehr gut',
    2 => 'Gut',
    3 => 'Befriedigend',
    4 => 'Genügend',
    5 => 'Nicht Genügend',
    default => 'Ungültiger Wert'
};

echo $grade_written;


/*
* Aufgaben
*
* 1.    Erstelle eine Match-Abfrage welche der Variable $day_name aufgrund der Zahlen
*       1 - 7 die Namen Montag - Sonntag zuweist. Gib auch einen default-Wert an.
*
*
*/
