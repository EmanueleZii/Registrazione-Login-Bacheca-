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
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/HomePage.css">
    <title>HomePage | Photo website</title>
</head>
<body>
    
    <nav class="navbar">
        <a  class="brand">HomePage</a>
       <a class="btn" href="../login.php">Logout</a>
       <a class="btn" href="../classes/Viewprofile.php">View Profile</a>
       <a class="btn active"  href="../classes/Homepage.php">HomePage</a>
    </nav>

    

        <div class="Commento">
            <form action="commento.php" method="post"> 
                <label>Lascia Un Commento:</label><br> <br>
                <input type="text" name="commento" class="commento" placeholder="commento"><br>
                <button type="submit" class="btn-commento">Commenta</button>     
            </form>
        </div>

        <div class="post-image">
        <div class="image">
            <?php
              
                
            ?>
        </div><br><br>

        <div>
            <?php
               $sqlcommento= "SELECT `commento` FROM `commentiutenti` ";
               $commentoutente= $conn->makeQueryall($sqlcommento);
            ?>
                <?php 
                    foreach ($commentoutente as $cm){
                        echo "<div class='container-commento'>";
                            echo "<h5 class ='nomeutente' >".$datiutente['email'].": </h5>";
                            echo "<p class='commento' >".$cm[0]."</p>";
                        echo "</div>";
                    }    
            ?>
        </div>
    </div>
    
</body>
</html>