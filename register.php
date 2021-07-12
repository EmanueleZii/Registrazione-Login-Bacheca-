<?php
session_start();
require("classes/connectDB.php");
$img ="./img/pexels.jpg";

$conn = new connectDb();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Now | Photo website</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<style>
   .menu {
    background-image: url(<?php echo $img;?>); 
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
      <a class="btn active" href="register.php">Register Now</a>
    </div>
    <div class="menu">
    <div></div><br><br>
      <div class="menu-register">
        <h2>Register Now</h2>
        <form action="classes/registerserver.php" method="post">
          <label>Name: </label><br>
          <input type="text" name="firstname" placeholder="Your Name" required><br>
          <label>Lastname: </label><br>
          <input type="text" name="lastname" placeholder="Your Lastname" required><br>
          <label>Email: </label><br>
          <input type="email" name="email" placeholder="Your E-mail" required><br>
          <label >Password: </label><br>
          <input type="password" name="password1" placeholder="Password" required><br>
          <label >Confirm Password: </label><br>
          <input type="password" name="password2" placeholder="Confirm Password" required><br>
          <button type="submit" class="btn-register" name="register">Register Now</button><br>
        </form><br><br>
        <a class="btn-account" href="login.php">Hai Gia un Accout?</a><br>
        <br><br><br>
      </div> <br><br>
    </div>
</body>
</html>