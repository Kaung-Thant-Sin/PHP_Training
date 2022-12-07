<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Day2</title>
</head>
<body>
  <?php
  echo "hello world<br>";
  echo("pi number is ".pi());
  echo "<br>";
  echo("minimum number is ".min(0, 150, 30, 20, -8, -200));
  echo "<br>";  
  echo("maximun number is ".max(0, 150, 30, 20, -8, -200));
  echo "<br>";
  echo("random number is ".rand());
  echo "<br>";
  echo "<hr>";

  $t = date("H");

  if ($t < "10")
  {
    echo "Have a good morning!<br>";
  } 
  elseif ($t < "20")
  {
    echo "Have a good day!<br>";
  } 
  else
  {
    echo "Have a good night!<br>";
  }
 
define("cars", [
  "Alfa Romeo",
  "BMW",
  "Toyota"
]);
echo cars[1];
echo "<br>";

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
 echo"<hr>";

$x = 6;

do 
{
  echo "The number is: $x <br>";
  $x++;
} 
while ($x <= 5);


for ($x = 0; $x <= 100; $x+=10) 
{
  echo "The number is: $x <br>";
}
echo"<hr>";

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $val) 
{
  echo "$x = $val<br>";
}

function AddFive(&$value)
{
  $value += 5;
}

$num = 2;
AddFive($num);
echo $num;
echo "<br>";

$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++)
{
  echo $cars[$x];
  echo "<br>";
}
echo"<hr>";

for ($row = 0; $row < 3; $row++)
{
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 3; $col++)
  {
    echo "<li>".$cars[$row][$col]."</li>";
  }
  echo "</ul>";
}
echo"<hr>";

$numbers = array(4, 6, 2, 22, 11);
sort($numbers);

$arrlength = count($numbers);
for($x = 0; $x < $arrlength; $x++)
 {
  echo $numbers[$x];
  echo "<br>";
}

?>
</body>
</html>