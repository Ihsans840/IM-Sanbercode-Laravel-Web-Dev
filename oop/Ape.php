<?php

require_once 'Animal.php';

class Ape extends Animal
{
    public function __construct($name)
    {
        // panggil constructor parent
        parent::__construct($name);
        // Ape (kera) berkaki 2, override nilai default
        $this->legs = 2;
    }

    public function yell()
    {
        echo "Auooo<br>";
    }
}