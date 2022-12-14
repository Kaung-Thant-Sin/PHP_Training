<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial_06</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <form action="action.php" method="post" enctype="multipart/form-data">
        Create folder name:
        <input type="text" name="foldername" value=""><br>
        Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload"><br>
        <input type="submit" value="Upload" name="submit" class="comm-btn">
    </form>

    <div class="display-div">
        <ul class="show-listul clear-float">
            <!--to check if $_POSR array has a key delete_file-->
            <?php

            error_reporting(0);
            if (isset($_POST["varname"])) 
            {
                $foldername = ($_POST["varname"]);
            }
            if (array_key_exists('delete_file', $_POST)) 
            {
                //image name from the img hidden tag
                $filename = $_POST['delete_file'];
                if (file_exists($filename)) 
                {
                    unlink($filename);
                    echo '<span class="succ">File ' . $filename . ' has been deleted</span>';
                } 
                else 
                {
                    echo '<span class="error">Could not delete ' . $filename . ', file does not exist</span>';
                }
            }
            //selected folder total count image
            $count_image = glob($foldername . "/*.*");

            for ($i = 0; $i < count($count_image); $i++) 
            {
                $image = $count_image[$i];

                echo '<li class="show-list"><form method="post" class="show-form"';
                echo '<td><img src="' . $image . '" alt="Random image" class="show-img" />';
                echo "<br>";
                echo '<input type="hidden" value="' . $image . '" name="delete_file" />';
                echo '<input type="submit" value="Delete" class="delete"></td>';
                echo '</form></li>';
            }
            ?>
        </ul>
    </div>
</body>

</html>