<?php

 //this page is responsible for server connection only, currently am using xampp
 //it will establish connection to county database through php script


       // inits
       $hostName ="localhost";
       $username ="root";
       $database="mombasacounty";
       $password="";

     try {
       //connection to server
       $conn = new PDO("mysql:host=$hostName;dbname=$database", $username, $password);

       //set pdo error mode to exception
       $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         } catch (PDOException $e) {
       echo "connection failed";
     }


  ?>
