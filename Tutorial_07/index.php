<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>QR code</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<h2>QRcode generator</h2>
<div class="container">
<form action="" method="POST" class="form-sec">
  Enter text:
  <input type="text" name="name" class="text"><br>
  <input type="submit" name="submit" value="submit" class="btn">
</form>


<?php
error_reporting(0);
include "lib/qrlib.php";
if (isset($_POST["name"])) {
$text=($_POST["name"]);
$location="../Tutorial_07/".$text .".png";
}

?>
<div>
  <?php
  QRcode::png($text,$location);
  ?>

  <img class="qr-img" src="<?php echo $location?>">
</div>

</div>
</body>
</html>
