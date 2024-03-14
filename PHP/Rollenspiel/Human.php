<?php

include_once "Player.php";

class Human extends Player {



    function getAttackValue() {
        if (rand(0, 99) < 20) {
            return $this->getStrength() * 3;
        }
        return $this->getStrength();
    }

    function attack($attack_value) {
        if (rand(0, 99) < 33) {
            return "$this->name ist ausgewichen.";
        }
        $this->health -= $attack_value;
        return "$this->name hat $attack_value Leben verloren <br>";
    }

}