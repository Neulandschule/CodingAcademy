<?php
/*
* Arrays
*/

//Indizierte Arrays
$arr1 = array(5, 10, 15);
$arr2 = [10, 20, 30, true, 'Test'];

#var_dump($arr1);
#var_dump($arr2);

//Zugriff - Verändern - Hinzufügen - Löschen
echo $arr1[0];
$arr[0] = 6;
$arr[3] = 20;
#unset($arr1[0]);
#unset($arr1);
#var_dump($arr1);



//Assoziative Arrays
$arr3 = array(
    'firstname' => 'Tim',
    'lastname' => 'Tester'
);
#var_dump($arr3);
#echo $arr3['lastname'];

$arr4 = ['fn' => 'Tom', 'ln' => 'Tester'];
#var_dump($arr4);

//Gemischte Arrays
$arr5 = [
    4 => 'Value1',
    'myKey' => 'Value2',
    1 => 'Value3',
    '1' => 'Value4'
];
#var_dump($arr5);


//Multidimensionale Arrays
$arr6 = [
    'arr7' => [1, 2]
];
#echo $arr6['arr7'][1];


/*
* Aufgaben
*
* 1.    Erstelle ein assoziative Array $person1 mit den Schlüsseln "firstname, lastname und age".
*       Die Werte solle "Tim, Tester, 18" sein
* 
* 2.    Erstelle ein assoziative Array $person2 mit den Schlüsseln "firstname, lastname und age".
*       Die Werte solle "Tom, Tester, 18" sein
*
* 3.    Erstelle ein indizierte Array $people mit $person1 und $person2.
*
* 4.    Gib den Namen "Tim Tester" aus, indem du nur auf das Array $people zugreifst.
*
*/
