<?php

//Einfache und doppelte Anführungszeichen

$info = "Das ist ein 'gutes' Tutorial";
$info = 'Das ist ein "gutes" Tutorial';
#echo $info;

$name = 'Tim';
#echo "Mein Name ist $name";
#echo 'Mein Name ist $name';


//Escape
$info = 'Das ist ein \'gutes\' Tutorial';
#echo "Mein Name ist \$name";
#echo 'C:\xampp';
#echo "C:\xampp";
#echo "C:\\xampp";


//String-Operator
$a = 'Hallo';
$b = 'Welt';
$c = $a . $b;
$c = $a . ' ' . $b;
#echo $c;

//Zeichen Zugriff
$word = "Hallo";
#echo $word[0];


/*
* Aufgaben
*
* 1.    Erstelle folgende folgenden String mit echos aus: 
*       "<div class="container">Inhalt des Containers</div>"
*       Löse dabei den Fehler auf 3 verschieden Arten.
* 
* 2.    Erstelle zwei Variablen mit deinen Daten: $firstname, $lastname 
*       Erstelle eine Variable $fullname, welche sich aus $firstname und $lastname zusammensetzt
*       und gib sie mit echo aus.
*
* 3.    Gib den ersten Buchstaben deines $firstname aus. 
*
*/

