<?php

class Player {
    public $name;
    protected $health = 100;
    protected $strength = 7;
    public $ring;

    function __construct($name, $ring) {
        $this->name = $name;
        $this->ring = $ring;
    } 

    function getHealth() {
        return $this->health + $this->ring->health;
    }

    function getStrength() {
        return $this->strength + $this->ring->strength;
    }

    function getAttackValue() {
        return $this->strength;
    }

    function attack($attack_value) {
        $this->health -= $attack_value;
        return "$this->name hat $attack_value Leben verloren <br>";
    }
}