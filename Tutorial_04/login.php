<!DOCTYPE html>
<?php

// define variables and set to empty values
$name = $email = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $password = test_input($_POST["password"]);

    if (!isset($_COOKIE[$name])) 
    {
        echo "<h2>Welcome New Member : $name </h2>";
        setcookie($name, $name, time() + (86400 * 30), "/"); // 86400 = 1 day expire

    } 
    else 
    {
        echo "<h2>Welcome Back : $name</h2>";
        echo "Cookie '" . $name . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$name];
    }
}

//to avoid uing tag keys input for security 
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <p>Welcome! you are now log in successfully.</p>
    <a href="logout.php" class="logout">Logout</a>

</body>

</html>