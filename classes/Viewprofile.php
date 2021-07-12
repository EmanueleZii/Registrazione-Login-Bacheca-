<?php
session_start();
require('connectDB.php');
$conn = new connectDb(); 
$sqlutente= "SELECT `firstname`,`lastname`,`email` FROM `utenti` ";
$datiutente= $conn->makeQueryassoc($sqlutente);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ViewProfile</title>
    <link rel="stylesheet" href="../css/style.css" >
    <link rel="stylesheet" href="../css/viewprofile.css">
</head>
<body>
     <nav class="navbar">
       <a  class="brand">HomePage</a>
       <a class="btn" href="../login.php">Logout</a>
       <a class="btn active" href="../classes/Viewprofile.php">View Profile</a>
       <a class="btn"  href="../classes/Homepage.php">HomePage</a>
    </nav>
    <div class="image-profile">

        <form action="upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" class="btn-image" value="Upload Image" name="submit">
        </form>
        <div>
            <?php
                require "upload.php";
                //$img = new ImageProfile();
                $img->PrintImage();
               // print_r($img);
            ?>
        </div>
    </div>

    <div class="datiutente">
        <?php echo "<a> Firstname : ". $datiutente['firstname']. "</a>"; ?><br><br>
        <?php echo "<a> Lastname : ". $datiutente['lastname']. "</a>"; ?><br><br>
        <?php echo "<a> E-mail : ". $datiutente['email'] . "</a>";?><br><br>
    </div>

</body>
</html>
