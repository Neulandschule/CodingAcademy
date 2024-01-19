<?php

//Datentypen
$var_null = null;
$var_bool = true;
$var_integer = 4;
$var_double = 4.2;
$var_string = 'Test';
$var_array = [1, 2, 3];
$var_object = new stdClass();
//callable, resource

//Typ feststellen
$type = gettype($var_object);
//echo $type;

#$isType = is_bool($var_bool);
#$isType = is_string($var_bool);
#$isType = is_int($var_bool);
#$isType = is_double($var_bool);
#$isType = is_string($var_bool);
#$isType = is_array($var_bool);
#$isType = is_object($var_bool);

#$isType = is_numeric($var_bool);
#var_dump($isType);


//Typ konvertieren
#$str = 'true';
#$bool = (bool) $str;
#$bool = settype($str, 'boolean');
#var_dump($bool);

#$bool = true;
#$str = (string) $bool;
#var_dump($str);

$str = '3';
#$int = (int) $str;
$int = $str + 2;
var_dump($int);


/*
* Aufgaben
*
* 1.    Erstelle eine Varible "my_double" mit einen beliebigen Wert des Datentyps "Double"
*       Prüfe ob es sich bei deiner erstellen Varable wirklich um den Datentyp "Double" handelt.
* 
* 2.    Erstelle eine Variable "theAnswer" mit dem Integer-Wert 42.
*       Wandle die Zahl in einen String um. (Prüfen, ob jetzt wirklich String)
*       Wandle dann den String in einen Double um. (Prüfen, ob jetzt wirklich Double)
*
*/