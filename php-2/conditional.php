<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Function</title>
</head>

<body>
<h1>Berlatih Function PHP</h1>
<?php

echo "<h3> Soal No 1 Greetings </h3>";
/*
    Soal No 1
    Greetings
*/

// function greetings
function greetings($name)
{
    echo "Halo $name, Selamat Datang di Sanbercode!<br>";
}

// contoh pemanggilan
greetings("Bagas");
greetings("Wahyu");
greetings("Muhammad Ihsan");

echo "<br>";

echo "<h3>Soal No 2 Reverse String</h3>";
/*
    Soal No 2
    Reverse String
*/

// function reverseString (tanpa strrev)
function reverseString($str)
{
    $result = "";
    for ($i = strlen($str) - 1; $i >= 0; $i--) {
        $result .= $str[$i];
    }
    return $result;
}

// contoh pemanggilan
echo reverseString("Muhammad Ihsan") . "<br>";
echo reverseString("Sanbercode") . "<br>";
echo reverseString("We Are Sanbers Developers") . "<br>";

echo "<br>";

echo "<h3>Soal No 3 Palindrome </h3>";
/*
    Soal No 3
    Palindrome
*/

// function palindrome, memakai reverseString di atas
function palindrome($string)
{
    $reversed = reverseString($string);
    if ($string === $reversed) {
        echo "true<br>";
        return true;
    } else {
        echo "false<br>";
        return false;
    }
}

// contoh pemanggilan
palindrome("civic");     // true
palindrome("nababan");   // true
palindrome("jambaban");  // false
palindrome("racecar");   // true

echo "<br>";

echo "<h3>Soal No 4 Tentukan Nilai </h3>";
/*
    Soal 4
    tentukan_nilai
*/

function tentukan_nilai($nilai)
{
    if ($nilai >= 85 && $nilai <= 100) {
        return "Sangat Baik";
    } elseif ($nilai >= 70 && $nilai < 85) {
        return "Baik";
    } elseif ($nilai >= 60 && $nilai < 70) {
        return "Cukup";
    } else {
        return "Kurang";
    }
}

// contoh pemanggilan
echo tentukan_nilai(98) . "<br>"; // Sangat Baik
echo tentukan_nilai(76) . "<br>"; // Baik
echo tentukan_nilai(67) . "<br>"; // Cukup
echo tentukan_nilai(43) . "<br>"; // Kurang

?>
</body>
</html>