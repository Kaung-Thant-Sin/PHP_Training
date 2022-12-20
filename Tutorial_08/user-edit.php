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
    $id = $_GET['updateid'];
    $sql = "SELECT * FROM postlist where id = $id;";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $id = $row['id'];
    $title = $row['title'];
    $content = $row['content'];
    $is_published = $row['is_published'];
    $created_datetime = $row['created_datetime'];
?>

    <h3 class="create-post">Edit Post</h3>
    <form action="update.php" method="post"> 
    <label for="title">Title</label><br>
        <input type="text" class="input" name="title" value = <?php echo $title; ?> ><br><br>
        <label for="content">Content</label><br>
       <textarea name="content" id="" cols="75" rows="10"  value = <?php echo $content; ?>></textarea><br><br>
        <input type="checkbox" class="" name="is_published"  value = <?php echo $is_published; ?>>Publish<br><br>
        <button type="submit" class= "update-btn" name = "update">Update</button>
    </form>
</body>
</html>