<?php

namespace objekte;
/*
* Objekte

- Class erstellen
- Objekt erstellen (vardump)
- Attribut mit public statt var (ändern, anzeigen)
- Attribut mit private
- Methoden (greed(), Hi)
- Methoden mit Return
- Methoden mit Parameter und $this
- Getter-Methode name
- Setter-Methode name
- Konstruktor name
- Weiteres Objekt erstellen + Methode ausführen
- Vererbung: Customer (Elternmethode aufrufen)
- Verergung mit Konstuktor (name, c_nr)
- Kindmethode (customerGreed, $this->name)
- Kindmethode getName() überschreiben
- Kindmethode getName() mit Elternvariable (Getter, Protected)

- Was gibt es sonst noch? Abstrakte Klassen, Interfaces, Traits


*/

class Person
{
    protected $name;

    function __construct($name)
    {
        $this->name = $name;
    }

    function greed($greed)
    {
        echo "$greed! Ich bin $this->name";
    }

    function getName()
    {
        return $this->name;
    }

    function setName($name)
    {
        $this->name = $name;
    }
}

class Customer extends Person
{
    public $c_nr;

    function __construct($name, $nr)
    {
        parent::__construct($name);
        $this->c_nr = $nr;
    }

    function getName()
    {
        #return $this->c_nr;
        #return parent::getName();
        return $this->name;
        #return self::$name;
    }

    function customerGreed()
    {
        echo "Servus. Ich bin " . $this->getName();
    }
}

$p1 = new Person('Tim');
$p2 = new Customer('Tom', 4);

var_dump($p2);
#$p1->name = 'Timmy';
#echo $p1->name;
#echo $p1->greed();
#$p1->greed('Hallo');

#$p1->setName('Timmy');
#echo $p1->getName();

#$p2->greed('Hi');
$p2->customerGreed('Hi');
