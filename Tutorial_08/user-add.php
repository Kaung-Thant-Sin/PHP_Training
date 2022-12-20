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
    <title>Document</title>
</head>
<body>
    <h3 class="create-post">Create Post</h3>
    <form action="add.php" method="post">  
        <label for="title">Title</label><br>
        <input type="text" class="input" name="title" ><br><br>

        <label for="content">Content</label><br><br>
       <textarea name="content" id="" cols="73" rows="10"></textarea><br><br>
        
        <input type="checkbox" class="" name="is_published">Publish<br><br>
        
        <input type="submit" class= "update-btn" value="create" name="add"> 
    </form>
  
</body>
</html>