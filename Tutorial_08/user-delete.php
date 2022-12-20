<?php
    require 'dbconnect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>CRUD Tuto</title>
</head>
<body>
<?php
    $id = $_GET['deleteid'];
    
    if (isset($_GET['deleteid'])) {      
        $sql = "delete from postlist where id = '$id';";
        if (mysqli_query($conn, $sql)) {
            echo "<p class=success>Deleted successfully</p>";
            header('Refresh:3; URL= index.php');
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    } else {
        echo "<p class=warning>something wrong here!</p>";
    }
    mysqli_close($conn);    
?>
</body>
</html>