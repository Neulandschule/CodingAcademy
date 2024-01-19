<?php
#Schlüsselwörter global
/*
* Global
*/


//Global ohne Parameter, global, parameter, referenz


$x = 1;
function myFunction()
{
    global $x;
    $x++;
    $y = 42;
}
myFunction();
echo $x;
echo $y;

#echo $x;
#echo $local;

//Referenz
$x = 1;
function myFunction2(&$x)
{
    $x++;
}
myFunction2($x);
echo $x;



$greed = 'Hi';
$sayHiAnon = function ($name) use ($greed) {
    echo "$greed $name";
};
#$sayHiAnon('Tim');

$sayHiArrow = fn ($name) => "$greed $name";
#echo $sayHiArrow('Tom');
