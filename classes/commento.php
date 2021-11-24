<?php
session_start();
require "connectDB.php";

$conn = new connectDb();

$commento = filter_var($_POST['comment'], FILTER_SANITIZE_STRING);



class Commentosystem 
{
    public function insertComment(){
       
       $conn->SaveData("INSERT INTO `commenti` (`commento`) VALUES ('$commento')");
       header("Location: Homepage.php");
    }
}

$com = new Commentosystem();
$com->insertComment();*/
