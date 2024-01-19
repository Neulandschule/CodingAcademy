<?php
/*
* Schleifen
*/

$i = 0;
while ($i < 10) {
    echo $i;
    $i++;
}

//Rückwerts
$i = 10;
while ($i > 10) {
    echo $i;
    $i++;
}

//Continue Break
$i = 0;
while ($i < 100) {
    if ($i < 50) {
        continue;
    }
    echo $i;
    if ($i == 81) {
        break;
    }

    $i++;
}


//Kurzform
$i = 0;
while ($i < 10) :
    echo $i;
    $i++;
endwhile;




//Verschachteln
//Unterschiedlich Wert
