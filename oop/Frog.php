<?php

require_once 'Animal.php';

class Frog extends Animal
{
    // legs tetap 4, jadi tidak perlu diubah constructor-nya
    public function jump()
    {
        echo "hop hop<br>";
    }
}