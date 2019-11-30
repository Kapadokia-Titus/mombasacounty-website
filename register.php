<?php
/*
this file is responsible for submitting users information from the html form to the database
 1. include the connection.php file
 2. test if the data is posting to the database
 3. initialize and get data from form to the database
*/

//include connection.php
$config = include_once('connection.php');
//testing if the data if posting to the database
              // $sql = "INSERT INTO users(name,email,password) VALUES('kapadokia titus','kapa@mail.com','123456')"; //working perfectly
              // $conn ->exec($sql);
              // echo "data is posted successfuly";
//now that our database is working, lets get information from the form and store it in the database
// we initialize variables name, email and password
if (isset($_POST['submit'])) {
  $fullname = $_POST['names'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  //post the data to the database
  $sql = "INSERT INTO users(name,email,password) VALUES('$fullname','$email','$password')"; //working perfectly
  $conn ->exec($sql);
  echo "data is posted successfuly";
}else {
  echo "tumechezwa nani";
}


 ?>
