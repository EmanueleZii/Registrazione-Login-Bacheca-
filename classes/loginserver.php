<?php
session_start();
require "connectDB.php";
$conn = new connectDb();

class Login  {


      public function login() {
              $checkdati = new connectDb();
              $email = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
              $password = sha1(filter_var($_POST['password'],FILTER_SANITIZE_STRING));  
              $checkdati->read("`utenti` "," `email`= $email ");  
       }
     
       public function Homepage(){
            header("Location: Homepage.php");
       }
}
    
$log = new Login();
$log->login();
$log->Homepage();