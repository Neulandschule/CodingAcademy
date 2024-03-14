<?php
include_once('Computing_Device.php');

class Computer extends Computing_Device {
    private $cpu;
    public $ram;
    protected $status = "off";
    static private $def = "Definition";

    function __construct($cpu, $ram) {
        $this->cpu = $cpu;
        $this->ram = $ram;
    }

    static function getDef() {
        return self::$def;
    }

    function getCpu() {
        return $this->cpu;
    }

    function setCpu($cpu) {
        $this->cpu = $cpu;
    }

    function __destruct() {
        #echo "Destuctor";
    }

    function starten() {
        $this->status = 'on';
    }

    protected function herunterfahren() {
        $this->status = 'off';
    }

    function calc() {
        return 1 + 1;
    }
}

