<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tutorial2</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php

echo "<h1>Tutorial 2</h1><br>";

$x = 0;
$y = 0;

echo "<div class='star'>";

while ($y < 13)
{   
    $x = 0;
    while ($x < $y)
    {
        if (($y % 2) == 0)
        {  
            echo " ";
        } 
        else
        {  
            echo "* ";  
        } 
        
        $x++;

    }

    echo "<br>";
    $y++;

}

$z = 9;

while ($z >= 0)
{
    $x = 0;

    while ($x < $z)
    {
        if (($z % 2) == 0)
        {  
            echo " ";
        } else
        {  
            echo "* ";  
        } 
        $x++;
    }

    echo "<br>";
    $z--;

}
echo "</div>";

?>
</body>
</html>