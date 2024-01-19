<?php
/*
* Stringfunktionen
*/


//Länge
$word = "Hallo";
#echo strlen($word);


//Groß- Kleinschreibung
$word = "Hello";
$up = strtoupper($word);
$low = strtolower($word);

//Trim
$word = "   Hello   ";
$trim_word = trim($word);
echo strlen($trim_word);

//Ersetzen
$word = "Hello Welt";
$word_replace = str_replace('Welt', 'Tim', $word);
#echo $word_replace;

//Substring
$word = "Hello World";
$sub = substr($word, 0, 5);
$sub = substr($word, -2);
#echo $sub;

//HTML Entities
$input = "<h1>äüö</h1>";
$input = htmlentities($input);
#echo $input;


//Array
$x = "Hallo Welt";
$arr = explode(' ', $x);
#var_dump($arr);


/*
* Aufgaben
*
* 1.    Erstelle eine Variable $course mit den Wert "Sleeping Academy". 
* 
* 2.    Ändere alle Buchstaben von $couse auf Großbuchstaben.
*
* 3.    Ersetze "SLEEPING" mit "CODING"
*
* 4.    Weise $course nur die letzten 8 Buchstaben zu.
*
* 5.    Entferne alle Leerzeichen vor und nach der Variable.
*
* 6.    Ersetze "ACADEMY" mit "42"
*
* 7.    Wandle $course in einen Integer um.
*
*/
