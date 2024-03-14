<?php

include_once('Computer.php');
include_once('Laptop.php');
include_once('DesktopPc.php');
include_once('Monitor.php');


$homePc = new Computer('AMD', 4);
$workPc = new Computer('Intel', 8);
$sisPc = clone $homePc;
$myLaptop = new Laptop('AMD', 16, '15 zoll');

$monitor = new Monitor();
$myDeskopPc = new DesktopPc('AMD', 4, $monitor);

#$homePc->starten();

#var_dump($homePc);
#var_dump($workPc);
#echo $homePc->status;
#echo $workPc->status;
#echo $sisPc->status;

#$myLaptop->starten();
#$myLaptop->show('Hallo Welt');
#var_dump($myLaptop);
#$myLaptop->herunterfahren();

#$homePc->status = 'on';
#$homePc->starten();
#var_dump($homePc);

#var_dump($myDeskopPc);
#$myDeskopPc->show('Joo Hallo');

#echo $myDeskopPc->gb2mb();

#echo Laptop::getDef();

