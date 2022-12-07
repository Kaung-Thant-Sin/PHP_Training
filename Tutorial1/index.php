<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tutorial1</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php

echo "<h1>Tutorial 1</h1><br>";

$x = 0;
$y = 0;

echo "<table>";

while ($x < 8)
{
  echo "<tr>";

  while ($y < 8)
  {
    if (($x % 2) == 0)
    {  
        if (($y % 2) == 0)
        {  
            echo "<td class='box2'></td>";  
        } else
        {  
            echo "<td class='box1'></td>";  
        }    
    } else
    {  
        if (($y % 2) == 0)
        {  
            echo "<td class='box1'></td>";  
        } else
        {  
            echo "<td class='box2'></td>";  
        }   
    }  

    $y++;

  }

  echo "</tr>";
  
  $y=0;
  $x++;

}

echo "</table>";

?>
</body>
</html>