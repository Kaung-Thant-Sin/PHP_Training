<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>

<body>
    <?php

    $favcolor = "yellow";

    switch ($favcolor) {
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

    ?>
</body>

</html>