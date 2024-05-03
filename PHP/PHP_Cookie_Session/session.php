<?php
/*
* PHP SESSIONS
* https://www.php.net/manual/de/features.sessions.php
*
* Speicherort: php.ini -> session.save_path="\xampp\tmp"     
*          
*/

session_start();

$_SESSION['my_first_session'] = "Hallo Welt";


# AUTOMATISCHE SERIALISIERUNG
$_SESSION['data'] = [1, 2, 3];

/*
* AUSGABBE
*/
echo "<pre>";
var_dump($_SESSION);
echo "</pre>";

/*
* VERFÜGBARKEIT
*/
# Session können auf allen Ebenen angelegt und abgerufen werden

/*
* SESSION LÖSCHEN
*/ 
# Einzelnen Wert löschen
#unset($_SESSION['my_first_session']);

# Alle Werte löschen 
#session_unset();

# Löscht die Session (Session-Datei)
#session_destroy()

/*
* Session ID in Cookie
*/
# php.ini -> session.use_cookies=1
# php.ini -> session.cookie_lifetime=0
# PHPSESSID -> Dateiname der SessionID
# Variante ohne Cookie möglich -> SessionID wird über Url mitgeschickt
#var_dump($_COOKIE);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Session Page 1</h1>
    
    <?= $_SESSION['my_first_session'] ?>

    <a href="subfolder/session.php">Link zu Page 2</a>
</body>
</html>
