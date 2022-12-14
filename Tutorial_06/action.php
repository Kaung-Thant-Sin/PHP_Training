<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/style.css">
<?php

// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) 
{
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) 
    {
        echo "<span class='succ'vFile is an image - " . $check["mime"] . ".</span>";
        $uploadOk = 1;
    } 
    else 
    {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
$foldername = ($_POST["foldername"]);

if (!is_dir('C:/Apache24/htdocs/Tutorial_06/' . $foldername)) 
{
    mkdir('C:/Apache24/htdocs/Tutorial_06/' . $foldername, 0777, true);
}
$target_dir = $foldername . "/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if file already exists
if (file_exists($target_file)) 
{
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) 
{
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Allow certain file formats
if (
    $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif"
) 
{
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) 
{
    echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
} 
else 
{
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
    {
        echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
    } 
    else 
    {
        echo "Sorry, there was an error uploading your file.";
    }
}

?>
<br>
<form action="index.php" method="POST" class="action">
    <input type="hidden" name="varname" value=<?php echo htmlspecialchars($foldername); ?>>
    <input type="submit" value="Back" class="comm-btn">
</form>