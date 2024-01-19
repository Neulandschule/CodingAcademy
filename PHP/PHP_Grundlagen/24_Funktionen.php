<?php
/*
* Funktionen
*/

declare(strict_types=1);

function sayHi()
{
    echo 'Hi';
}
#sayHi();

//Parameter !!!Typdeklarationen
function sayHiTo($name)
{
    echo "Hi $name";
}
sayHiTo('Tim');
#sayHiTo(42);

//Standartwert
function sayHiToDefault($name = "Unbekannter")
{
    echo "Hi $name";
}
#sayHiToDefault();


//Mehr Parameter
function sub($x, $y)
{
    echo $x - $y;
}
#sub(4, 5);
#sub(y: 4, x: 5);


function addDefault($x, $y = 10)
{
    echo $x + $y;
}
#addDefault(4);

//Flexible Anzahl Parameter
function addFlex1()
{
    var_dump(func_num_args());
    var_dump(func_get_args());
}
#addFlex1(1, 2, 3);


function addFlex2($x, ...$params)
{
    var_dump($params);
}
#addFlex2(1, 2, 3);


//Rückgabewert !!!Typdeklarationen
function addWithReturn(int $x, int $y): int
{
    #return;
    #return 'Hallo';
    return $x + $y;
    #return [$x, $y, $x+$y];
}
$result = addWithReturn(3, 4);
#echo $result;
#Mehr Rückgabewerte mit Array


//Statische Funktionen
function countUp()
{
    static $a = 0;
    echo $a;
    $a++;
}
#count();
#count();



//Anonyme Funktionen !!!Semicolon
$sayHiAnon = function ($name) {
    echo 'Hi ' . $name;
};
#$sayHiAnon('Tim');

//Pfeilfunktionen
#$sayHiArrow = fn($name) => 'Hi'.$name;
#echo $sayHiArrow('');

//Pfeilfunktion fn
