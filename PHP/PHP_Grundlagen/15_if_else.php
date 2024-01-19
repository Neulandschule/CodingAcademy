<?php
/*
* Fallunterscheidungen
* IF - ELSE
*/

//If
if (true) {
    #echo 'Ist wahr!';
}

//Else
$pwd = 'admin';
if ($pwd == 'asdf') {
    #echo 'Passwort korrekt!';
} else {
    #echo 'Passwort falsch!';
}


//Elseif
if ($pwd == 'asdf') {
    #echo 'Passwort korrekt!';
} elseif ($pwd == 'admin') {
    #echo 'Hallo Admin!';
} else {
    #echo 'Passwort falsch!';
}


//Verschachtelung
$user = 'Tim';
$pwd = 'qwert';
if ($user == 'Tim' && $pwd == 'qwert') {
    #echo 'Hallo Tim';
}

if ($user == 'Tim') {
    if ($pwd = 'qwert') {
        #echo 'Hallo Tim !!!';
    }
}



//Kurzform
/*
if (true) echo 'Hallo!';

if (false) echo 'Hallo!!';
else echo 'Bye';
*/

//Kurzform 2
/*
if (true) : echo 'Hallo!!!';
else : echo 'Bye';
endif;
*/

/*
* Aufgaben
*
* 1.    Erstelle eine Variable $name und weise ihr deinen Namen zu.
*       Prüfe ob der Name mit einem Selbstlaut beginnt.
*       - Verwende einmal logische Operatoren 
*       - Verwende einmal ein if-elseif-else Verzweigung
*
* 2.    Erstelle eine Variable mit den Wert 42.
*       Prüfe ob die Variable nummerisch ist. Falls Sie nummerisch ist,
*       prüfe ob sie ein ein Integer oder ein Double ist.
*       Gib das Ergbebnis mit echo aus.
* 
* 3.    Erweitere die Datei 02_Template.php um eine If-Bedingung,
*       welche prüft ob $classname "red" ist.
*       Falls die der Fall ist soll der Text "Alarm" angezeigt werden.
*
*/
