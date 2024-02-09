<?php
#Schlüsselwörter global
/*
* Global
*/

//Gültigkeitbereich
/*
$x = 1;
function myFunction0() {
    $x++;
}
myFunction0();
echo $x;
*/

//Parameter
/*
$x = 1;
function myFunction1($x) {
    $x++;
    return $x;
}
$x = myFunction1($x);
echo $x;
*/


//Global
/*
$x = 1;
function myFunction2() {
    global $x;
    $x++;
    //$y = 42;
}
myFunction2();
echo $x;
//echo $y;
*/

//Referenz
#$x = 1;
#function myFunction3(&$x)
#{
#    $x++;
#}
#myFunction3($x);
#echo $x;


//Anonyme Funktionen
#$greed = 'Hi';
#$sayHiAnon = function ($name) use ($greed) {
#    echo "$greed $name";
#};
#$sayHiAnon('Tim');

#$sayHiArrow = fn ($name) => "$greed $name";
#echo $sayHiArrow('Tom');


/*
* Aufgaben
*
* 1.    Erstelle eine Funktion, welche von der Wort $name den ersten Buchstaben
*       mit den Buchstaben "A" ersetzt.
*       - Löse die Aufgabe mit Parameter
*       - Löse die Aufgabe mit einer globalen Variable
*       - Löse die Funktion mit einer Referenz
*
*/

