<?php

# Unterverzeichnisse können Cookie von überliegenden Verzeichnissen lesen
var_dump($_COOKIE);

# Umgekehrt funktioniert das nicht
setcookie('from_subfolder', "Hallo von Sub!");