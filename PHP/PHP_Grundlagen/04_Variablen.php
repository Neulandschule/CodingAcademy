<?php

// Variablen mit $

#$myVar = 'Hallo Welt';
#echo $myVar;

#$myVar = 'Hello World!!!';
#echo $myVar;

//Regeln
//Buchstaben, Ziffern, Unterstriche
//Nicht mit Ziffer beginnen
//Ansprechende Namen
//CaseStyles

#$my var = 1;
#$1var = 1;
#echo $1var;


//Variable Variablen
#$a = 'myVarName';
#$$a = 'Test';
#echo $a;
#echo $$a;
#echo $myVarName;


//Funktionen
$a = 'Inhalt';
$b = '';
$c;
#$d
#var_dump(isset($a));
#var_dump(empty($a));
#unset($a);
#var_dump($a);

//Referenzen
$name1 = 'Tim';
$name2 = $name1;
#$name2 = &$name1;

$name1 = 'Tom';
echo $name2;


/*
* Aufgaben
*
* 1.    Erstelle ein Variable $kurs mit den String "Coding Acedemy"
*       Gib die Variable auf 3 verschiedene Arten aus.
* 
* 2.    Löse das Rätsel:
*       $a = 'x';
*       $b = 'a';
*       $c = 'b';
*       Was ist $$$c ?
*
*/

