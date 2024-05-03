<?php
/*
* COOKIES
* https://www.php.net/manual/de/features.cookies.php
*/


# Cookies werden im Header mitgesendet
# 1 - Aufruf: noch kein Cookie (Server erstellt Cookie und schickt es an Client)
# 2 - Aufruf: Client schickt Cookie mit
echo "<pre>";
var_dump(getallheaders());
echo "</pre>";

/*
* COOKIES SETZEN
*/
# Einfachen String in Cookie speichern
setcookie('my_first_cookie', 'Hallo Welt');


# Arrays als Cookie speicher
$arr = [1, 2, 3];
$serialized_arr = serialize($arr);
setcookie('my_data', $serialized_arr);

/*
* COOKIES ABFRAGEN
*/
echo "<pre>";
var_dump($_COOKIE);
echo "</pre>";

if (isset($_COOKIE['my_first_cookie'])) {
    echo $_COOKIE['my_first_cookie'];
}

echo "<br>";
var_dump(unserialize($_COOKIE['my_data']));


/*
* COOKIE VERFÜGBARKEIT
*/
# Cookies sind auch in Unterverzeichnissen erreichbar (aber nicht umgekehrt)
#echo $_COOKIE['from_subfolder']; //Geht nicht!

/*
* COOKIES ZEITRAUM
*/
# Standard-Cookies werden nach schließen des Browser wieder gelöscht
# Lebensdauer kann mit Timestamp angegeben werden

# Cookie mit 1 Minute Lebendauer
setcookie('myShortLiveCookie', 'Hallo Zukunft', time() + 60 );
# Cookie bis zu einem bestimmten Datum
setcookie('myLongLiveCookie', "Hallo Zukunft", mktime(0,0,0,12,31,2024));

/*
* COOKIES LÖSCHEN
*/
# Selber löschen
# Chrom: (!) neben URL -> Cookies und Webseiten -> Websitedaten auf dem Gerät verwalten -> löschen

# Am Server durch Setzen des Timestamps in die Vergangenheit. 
setcookie('my_first_cookie', 'Hallo Welt', time() - 3600);



