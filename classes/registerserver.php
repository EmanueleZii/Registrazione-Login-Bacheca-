<?php
session_start();
require "connectDB.php";
$save = new connectDb();

Class Register {


  public function CheckDati()
  {
     @$firstname = filter_var($_POST['firstname'],FILTER_SANITIZE_STRING);
     @$lastname = filter_var($_POST['lastname'],FILTER_SANITIZE_STRING);
     @$email = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
     @$password = md5(filter_var($_POST['password1'],FILTER_SANITIZE_STRING));
     @$password2 = md5(filter_var($_POST['password2'],FILTER_SANITIZE_STRING));
       
     if (isset($_POST['register'])) {

          if (empty($firstname)) {
              echo "<p> firstname is Required </p>";
          }

          if (empty($lastname)){
            echo "<p> lastname is Required </p>";
          }

          if (empty($email)){
            echo "<p> email is Required </p>";
          }

          if (empty($password)){
            echo "<p> Password is Required </p>";
          }

          if (empty($password2)){
            echo "<p> Confirm Password is Required </p>";
          }

          if ($password != $password2){
            echo "<p> le password non corrispondono</p>";
          }

        }
  }

  public function insertdati() { 
     $firstname = filter_var($_POST['firstname'],FILTER_SANITIZE_STRING);
     $lastname = filter_var($_POST['lastname'],FILTER_SANITIZE_STRING);
     $email = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
     $password = md5(filter_var($_POST['password1'],FILTER_SANITIZE_STRING));
     $save = new connectDb();
     $save->CreateData("`utenti`","(`firstname`,`lastname`,`email`,`password`)","('$firstname','$lastname','$email','$password')");
  }

  public function GoHomepage(){
    header("Location: Homepage.php");
  }
}

$reg = new Register();
$reg ->CheckDati();
$reg->insertdati();
$reg->GoHomepage();