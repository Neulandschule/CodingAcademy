<?php

class Ring {
    public $name = '';
    public $health = 0;
    public $strength = 0;

    public function __construct($name) {
        if ($name == 'strong_ring') {
            $this->name = "Ring der Stärke";
            $this->strength = 10;
        }
        if ($name == 'lucky_ring') {
            $this->name = "Ring des Glücks";
            if (rand(0, 99) < 25) {
                $this->health = 20;
            }
            if (rand(0, 99) < 25) {
                $this->strength = 10;
            }
        }
    } 

    function toString() {
        return "$this->name (Health = $this->health | Strength = $this->strength )";
    }
}