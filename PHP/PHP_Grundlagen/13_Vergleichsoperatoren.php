<?php
/*
* Vergleichsoperatoren
*/

$result = 1 > 2;
$result = 1 < 2;
$result = 1 >= 2;
$result = 1 <= 2;
$result = 1 == 2;
$result = 1 != 2;
$result = 1 <> 2;
#var_dump($result);

//Typsicherheit
$x = '1';
$y = 1;
#$result = $x == $y;
#$result = $x === $y;
#$result = $x != $y;
#$result = $x !== $y;
#var_dump($result);

//Strings vergleiche;n (ASCII Codes)
$a = 'a';
$b = 'b';
$result = $a < $b;
#var_dump($result);

$a = 'a';
$b = 'A';
$result = $a < $b;
#var_dump($result);

$a = 'aaab';
$b = 'aaac';
$result = $a < $b;
#var_dump($result);


//Spaceship Operator
$a = 5;
$b = 5;
$result = $a <=> $b;
#var_dump($result);


/*
* Aufgaben
*
* 1.    Erstelle 6 unterschiedliche Vergleiche 
*       (größer, kleiner, kleiner-gleich, größer-gleich, gleich, ungleich),
*       welche alle als Ergebnis "false" ausgeben.
*       
* 2.    Erstelle zwei Zahlen ($zahl1 und $zahl2) mit den Wert 42.
*       Prüfen auf Gleichheit.
*       Wandle $zahle2 in einen String um.
*       Prüfe auf Gleichheit mit und ohne Typsicherheit.
*
*/
