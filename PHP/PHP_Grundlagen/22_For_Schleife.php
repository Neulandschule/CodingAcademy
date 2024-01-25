<?php
/*
* Schleifen
*/


#for ($i = 0; $i < 10; $i++) {
#    echo $i;
#}


//Kurzform
#for ($i = 0; $i < 10; $i++) echo $i;

#for ($i = 0; $i < 10; $i++) :
#    echo $i;
#endfor;


//Argumente weglassen
#$i = 0;
#for (; $i < 10; $i++) {
#    echo $i;
#}

#for (; $i < 10;) {
#    $i++;
#    echo $i;
#}

#for (;;) {
#    if ($i > 10) {
#        break;
#    }
#    $i++;
#    echo $i;
#}

//Verschachteln
#for ($i = 0; $i < 3; $i++) {
#    for ($j = 0; $j < 3; $j++) {
#        echo "$i - $j - <br>";
#    }
#}

//Array
#$arr = ['eins', 'zwei', 'drei'];
#for ($i = 0; $i < count($arr); $i++) {
#    echo $arr[$i];
#}



/*
* Aufgaben
*
* 1.    Löse die Aufgaben von 20_While_Schleife.php mit der FOR-Schleife
*
*
*/