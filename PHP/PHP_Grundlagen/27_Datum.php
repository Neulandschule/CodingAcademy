<?php
/*
* Datum
*/


/*
* FUNKTIONEN
* https://www.php.net/manual/en/function.getdate
* https://www.php.net/manual/de/function.date.php
* https://www.php.net/manual/de/function.time
*/

//Datum ertellen
#$date = getDate();
#$date = date('Y-m-d');
#$date = date('d.m.Y H:i');
#var_dump($date);

//Zeitstempel
#$timestamp = time();
#$timestamp = mktime(1, 0, 0, 1, 1, 1970);
#echo $timestamp;




/*
* Datetime OBJEKT
* https://www.php.net/manual/en/class.datetime.php
*/


#$date = new DateTime();
#$date = new DateTime('2023-1-1');
#$date->setDate(2023, 1, 1);
#$date->setTimestamp(1673188820);

#var_dump($date);
#echo $date->format('Y-m-d');
#echo $date->getTimestamp();

//Rechnen
#$timestamp_tomorrow = time() + (60 * 60 * 24);
#echo date('Y-m-d', $timestamp_tomorrow);

#$date = new DateTime();
#$date->modify('1 day');
#echo $date->format('Y-m-d');

#$date = new DateTime();
#$xmas = new DateTime('2023-12-24');
#$div = $xmas->diff($date);
#var_dump($div);


$date = date('l');
echo $date;

/*
* Aufgaben
*
* 1.    Erstelle eine IF-ElseIf-Else Funktion, welche prüft welcher Wochentag
*       heute ist und dann folgende Ausgaben erstellt:
*       - Super. Heute ist Freitag und Coding Academy
*       - Toll. Heute ist Samstag und Coding Academy
*       - Heute ist leider keine Coding Academy
*       TIPP: Dokumentation https://www.php.net/manual/de/function.date.php -> Beispiele
*
* 2.    Verwende die DateTime Klasse um herauszufinden welches Datum in 42 Tagen ist.
*
*/
