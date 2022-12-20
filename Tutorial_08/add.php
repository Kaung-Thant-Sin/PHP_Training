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
    if (isset($_POST['add'])) {
        $title = $_POST['title'];
        $content = $_POST['content'];
        $is_published = $_POST['is_published'];
            if (($is_published) == "on") {
                $is_published =1;
            } else {
            $is_published = 0;
            }

        if( !empty($title) && !empty($content) ) {
            $sql = "insert into postlist (title, content, is_published ) values ( '$title', '$content', $is_published );";
            if (mysqli_query($conn, $sql)) {
                echo "<p class = success>Congratulation! New record added successfully<p>";
                header('Refresh:2; URL= index.php');
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
       
        } else {
            echo "<p class = warning>Please fill all the required field!</p>";
            //header('Refresh:2; URL= user-add.php');
        }
    }
    
    mysqli_close($conn);    
?>
</body>
</html>