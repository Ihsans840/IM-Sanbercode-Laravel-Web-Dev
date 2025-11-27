<?php

require_once 'Animal.php';
require_once 'Ape.php';
require_once 'Frog.php';

echo "<h1>Belajar OOP PHP - Animal</h1>";

// Release 0
$sheep = new Animal("shaun");

echo "<h3>Release 0</h3>";
echo "Name: " . $sheep->name . "<br>";          // shaun
echo "Legs: " . $sheep->legs . "<br>";          // 4
echo "Cold Blooded: " . $sheep->cold_blooded . "<br><br>"; // no

// Release 1
echo "<h3>Release 1</h3>";

$sungokong = new Ape("kera sakti");
echo "Ape Name: " . $sungokong->name . "<br>";
echo "Ape Legs: " . $sungokong->legs . "<br>";
echo "Ape Yell: ";
$sungokong->yell(); // "Auooo"

echo "<br>";

$kodok = new Frog("buduk");
echo "Frog Name: " . $kodok->name . "<br>";
echo "Frog Legs: " . $kodok->legs . "<br>";
echo "Frog Jump: ";
$kodok->jump(); // "hop hop"