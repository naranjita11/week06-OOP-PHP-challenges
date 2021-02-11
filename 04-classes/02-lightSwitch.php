<?php

// Create a class that represents a light switch

require __DIR__ . "/vendor/autoload.php";

class LightSwitch
{
    private bool $on = false;


    public function turnOn()
    {
        $this->on = true;
    }


    public function turnOff()
    {
        $this->on = false;
    }

    
    public function isOn() : bool
    {
        return $this->on;
    }

}

$lightSwitch = new LightSwitch();

// you can check whether it is on or not
dump($lightSwitch->isOn()); // false

// you can turn it on
$lightSwitch->turnOn();
dump($lightSwitch->isOn()); // true

// you can turn it off
$lightSwitch->turnOff();
dump($lightSwitch->isOn()); // false