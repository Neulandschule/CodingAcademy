<?php
/*
* Arrayfunktionen
*/

$arr1 = [5, 10, 15];

//Länge
#echo count($arr1);

//Hinzufügen - Entfernen
array_push($arr1, 20);
array_pop($arr1);
#$x = array_pop($arr1);
array_unshift($arr1, 2);
array_shift($arr1);
#var_dump($arr1);
#echo $x;

//Sortieren
#rsort($arr1);
#asort($arr1);
var_dump($arr1);

//Verbinden
$arr2 = [20, 30, 40];
$arr3 = array_merge($arr1, $arr2);
#var_dump($arr3);

//Schneiden
# $arr4 = array_slice($arr3, 0, 3);
#$arr4 = array_slice($arr3, 3);
#var_dump($arr4);


//Suche
$index = array_search(10, $arr1);
#echo $index;

//String
$arr5 = ['Hallo', 'Welt'];
$str = implode(" ", $arr5);
echo $str;


/*
* Aufgaben
*
* 1.    Erstelle ein Array $myNumbers mit den Zahlen 42, 41, 40
*       Sortiere es in aufsteigender Reihenfolge.
*       Hole die das letzte Element des Arrays und weise es der Variable $lucky_namber zu.
*       
* 2.    Erstelle den folgenden String: "I-love-coding"
*       Wandle den String in ein Array, welches aus den einselnen Wörtern besteht.
*       Wandle das Array wieder in einen String mit Leerzeichen zwischen den Wörtern.
*
*/
