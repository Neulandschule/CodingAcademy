<?php
include_once('Computer.php');
include_once('showable.php');
include_once('Converter.php');

class DesktopPc extends Computer implements showable {
    use Converter;
    public $monitor;

    function __construct($cpu, $ram, $monitor) {
        $this->monitor = $monitor;
        parent::__construct($cpu, $ram);
    }

    function show($text) {
        $this->monitor->show($text);
    }
}