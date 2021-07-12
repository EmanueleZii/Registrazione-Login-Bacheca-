<?php
session_start();
$img ="./img/pexels.jpg";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log-In | Photo website</title>
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
      <a class="btn active" href="login.php">Login</a>
      <a class="btn" href="register.php">Register Now</a>
    </div>
    <div class="menu">
      <div></div><br><br>
      <div class="menu-login">
      <h1>Log-in</h1><br>
        <form action="classes/loginserver.php" method="post">
          <label>Email: </label><br>
          <input type="email" name="email" placeholder="Your E-mail" required><br>
          <label >Password: </label><br>
          <input type="password" name="password" placeholder="Password" required><br>
          <button type="submit" name="btn" class="btn-login">Log-in </button><br>
        </form><br>
        <a class="btn-account" href="Register.php" name="login">Non hai un Account?</a> 
        <br><br><br>
      </div><br><br>
    </div>
</body>
</html>