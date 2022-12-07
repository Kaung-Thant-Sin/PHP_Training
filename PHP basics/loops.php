<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>

<body>
    <?php

    //while loop
    $x = 0;

    while ($x <= 100) {
        echo "The number is: $x <br>";
        $x += 10;
    }

    //do while loop
    $x = 6;

    do {
        echo "The number is: $x <br>";
        $x++;
    } while ($x <= 5);

    //for loop
    for ($x = 0; $x <= 100; $x += 10) {
        echo "The number is: $x <br>";
    }

    //foreach loop
    $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

    foreach ($age as $x => $val) {
        echo "$x = $val<br>";
    }

    //break
    for ($x = 0; $x < 10; $x++) {
        if ($x == 4) {
            break;
        }
        echo "The number is: $x <br>";
    }

    //continue
    for ($x = 0; $x < 10; $x++) {
        if ($x == 4) {
            continue;
        }
        echo "The number is: $x <br>";
    }

    ?>
</body>

</html>