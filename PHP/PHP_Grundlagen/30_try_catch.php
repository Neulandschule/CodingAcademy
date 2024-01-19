<?php
/*
* Try Catch
*/

function divide($x, $y)
{
    if ($y == 0) {
        throw new Exception('Division durch 0 nicht erlaubt');
    }
    return $x / $y;
}


$num = 0;

try {
    $result = divide(8, $num);
    #echo 4 / 0;
} catch (Exception $e) {
    #echo $e;
    echo $e->getMessage();
    $result = 0;
} finally {
    echo 'FINALLY';
}


echo $result;



/*
try {
    echo 4 / 0;
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
    echo "noooo";
} finally {
    echo "First finally.\n";
}
*/
