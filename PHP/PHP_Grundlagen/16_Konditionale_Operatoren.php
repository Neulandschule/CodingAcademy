<?php
/*
* Ternärer Operator
* ? :
*/

$value = true;
if ($value) {
    #echo 'Hallo';
} else {
    #echo 'Bye';
}

#echo ($value) ? 'Hallo' : 'Bye';


//Konditionaler Operator
#$val = 'Tim';
#$val = null;

if ($val) {
    $output = $val;
} else {
    $output = 'Ungültig';
}
#echo $output;

$output = $val ?: 'Ungültig';
#echo $output;


//Konditionaler Operator mit Nullprüfung
$output = $val ?? 'Ungülig';

#echo $output;


/*
* Aufgaben
*
* 1.    Erstelle eine Variable $access mit den Wert 'false'
*       Erstelle eine Variable $pwd mit dem Wert 'qwert'
*       Wenn $pwd den Wert 'qwert' soll $access 'true' sein.
*       Verwende dabei den ternären Operator
*
*
*/
