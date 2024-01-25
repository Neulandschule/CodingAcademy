<?php
/*
* Namespace
*/
include '25_Objekte.php';

#use objekte\Person;
#use objekte\Person as Person2;


class Person
{
    public $firstname = 'Bobo';
}


$p = new Person();
var_dump($p);

#$p2 = new objekte\Person();
#var_dump($p2);

#$p3 = new Person2();
#var_dump($p3);
