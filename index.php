<?php
session_start();
$img= "./img/Photo.jpg";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Home| Photo website</title>
    <link rel="stylesheet" href="css/style.css" >
</head>
<style>
  .menu {
    background-image: url("img/Photo.jpg"); 
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    height: 800px;
 }
</style>
<body>
   
    <div class="navbar">
     <a class="brand">PhotoSite</a> 
      <a class="btn" href="login.php">Login</a>
      <a class="btn" href="register.php">Register Now</a>
    </div>

    <div class="menu"><br><br>
      <h1 class="title">Welcome in the Community</h1>
    
      <div class="content" ><br><br>
        <p>
          Lorem ipsum dolor, sit amet consectetur adipisicing
          elit. Fugiat omnis esse quidem quisquam similique 
          facilis, obcaecati quam voluptatem, nesciunt soluta
          voluptas, corrupti sapiente atque placeat excepturi 
          maiores est dolorem voluptate.
          </p><br><br>
          <a class="btn-start" href="register.php">Get Started</a>
       </div>
    </div>
     
</body>
</html>