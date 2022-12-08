<?php

//if statement
$t = date("H");

if ($t < "10")
{
    echo "Have a good morning!";
} 
elseif ($t < "20") 
{
    echo "Have a good day!";
} 
else 
{
    echo "Have a good night!";
}

//switch statements
$favcolor = "yellow";

switch ($favcolor)
{
    case "red":
        echo "Your favorite color is red!<br>";
        break;
    case "blue":
        echo "Your favorite color is blue!<br>";
        break;
    case "green":
        echo "Your favorite color is green!<br>";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!<br>";
}

//while loop
$x = 0;

while ($x <= 100)
{
    echo "The number is: $x <br>";
    $x += 10;
}

//do while loop
$x = 6;

do
{
    echo "The number is: $x <br>";
    $x++;
} 
while ($x <= 5);

//for loop
for ($x = 0; $x <= 100; $x += 10) 
{
    echo "The number is: $x <br>";
}

//foreach loop
$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

foreach ($age as $x => $val)
{
    echo "$x = $val<br>";
}

//break
for ($x = 0; $x < 10; $x++) 
{
    if ($x == 4) {
        break;
    }
    echo "The number is: $x <br>";
}

//continue
for ($x = 0; $x < 10; $x++) 
{
    if ($x == 4) {
        continue;
    }
    echo "The number is: $x <br>";
}
