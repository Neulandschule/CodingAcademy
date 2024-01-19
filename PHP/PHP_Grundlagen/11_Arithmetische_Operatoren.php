<?php

/*
* Mathematische Operatoren
*/

$result = 10 + 1;
$result = 10 - 2;
$result = 10 * 2;
$result = 10 / 3;
$result = 10 % 3;
$result = 10 ** 3;

//Kurzform mit Zuweisung
$x = 10;
$x = $x + 5;
$x += 5;
$x -= 2;
$x *= 2;
$x /= 2;
echo $x;

//Inkrement (++) und Dekrement (--)
$x = 10;
$x++;
$x--;
#echo $x;

$x = 10;
#$result = $x++ + 5;
$result = ++$x + 5;
echo "$x - $result";


/*
* Aufgaben
*
* 1.    Erstelle 6 Rechnungen mit den 6 unterschiedlichen arithmetischen Operatoren,
*       welche alle je das Ergebnis 64 ergeben.
*       
* 2.    Erhöhe die Zahl 10 auf 3 verschiedene Arten um 1.
*
*/