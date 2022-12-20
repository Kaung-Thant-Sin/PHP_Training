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
    <div class= "div">
        <button  class="cmn-btn add"><a href="user-add.php">Create</a></button>
        <h2 class = "ttl">Post List</h2>
    </div>
    <table>
        
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Content</th>
            <th>Is Published</th>
            <th>Created Date</th>
            <th colspan="2">Actions</th>
        </tr>
    <?php
    $sql = "SELECT * FROM postlist;";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            if (($row["is_published"] == true))
                    {
                        $is_published = "Published";
                    } else {
                        $is_published = "Unpublished";
                    }
            $id = $row['id'];
            $title = $row['title'];
            $content = $row['content'];
            $created_datetime = $row['created_datetime'];
            //$actions = $row['actions'];

            echo '<tr>
                <td>'.$id.'</td>
                <td>'. $title.'</td>
                <td>'.$content.'</td>
                <td>'.$is_published.'</td>
                <td>'.$created_datetime.'</td>
                <td>
                    <button class= "cmn-btn view"><a href= "user-view.php?viewid='.$id.'">View</a></button>
                    <button class= "cmn-btn edit"><a href= "user-edit.php?updateid='.$id.'">Edit</a></button>
                    <button class= "cmn-btn delete"><a href= "user-delete.php?deleteid='.$id.'">Delete</a></button>
                </td>
            </tr>
            ';
        };
      ?>
    </table>
    <?php
    };
    ?> 
</body>
</html>