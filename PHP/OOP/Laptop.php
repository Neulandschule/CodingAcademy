<?php
include_once('Computer.php');
include_once('showable.php');
include_once('Converter.php');

class Laptop extends Computer implements showable {
    use Converter;
    public $display;

    function __construct($cpu, $ram, $display) {
        $this->display = $display;
        parent::__construct($cpu, $ram);
    }

    function show($text) {
        echo $text;
    }

    function starten() {
        $this->show('Laptop wird hochgefahren.');
        $this->status = 'on';
    }

    function herunterfahren() {
        $this->show('Laptop wird heruntergefahren.');
        parent::herunterfahren();
    }


}