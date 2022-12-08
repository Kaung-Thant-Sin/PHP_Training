<?php

//variables
$txt = "W3Schools.com";
echo "I love $txt!";

$x = 5;
$y = 4;
echo $x + $y;

//datatypes
//php string
$x = "Hello world!";
$y = 'Hello world!';

echo $x;
echo "<br>";
echo $y;
echo "<br>";

//php integer
$x = 5985;
var_dump($x);
echo "<br>";

//php float
$x = 10.365;
var_dump($x);
echo "<br>";

//php array
$cars = array("Volvo", "BMW", "Toyota");
var_dump($cars);

//php constant
define("cars", [
    "Alfa Romeo",
    "BMW",
    "Toyota"
]);
echo cars[0];
echo "<br>";

//math
//pi value
echo (pi());
echo "<br>";

//maximum and minimum value
echo ("minimum number is " . min(0, 150, 30, 20, -8, -200));
echo "<br>";
echo ("maximun number is " . max(0, 150, 30, 20, -8, -200));
echo "<br>";

//random value
echo ("random number is " . rand());
echo "<br>";

//square root
echo (sqrt(64));
echo "<br>";

//sorting array
//ascending order
$numbers = array(4, 6, 2, 22, 11);
sort($numbers);
print_r($numbers);
echo "<br>";

//descending order
$numbers = array(4, 6, 2, 22, 11);
rsort($numbers);
print_r($numbers);
echo "<br>";
