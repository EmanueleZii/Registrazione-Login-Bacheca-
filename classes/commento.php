<?php
session_start();
require "connectDB.php";
$conn = new connectDb();

class Commentosystem {

    public function insertComment(){
       $commento = filter_var($_POST['commento'],FILTER_SANITIZE_STRING);
       $conn =new connectDb();
       $conn->CreateData(" `commentiutenti` "," (`commento`) "," ('$commento') ");
       header("Location: Homepage.php");
    }
}

$com = new Commentosystem();
$com->insertComment();
