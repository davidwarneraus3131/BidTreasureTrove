

<?php
//  $host = "localhost";
//  $username = "u541379268_treasure";
//  $password = "Teckzy@123";
//  $database = "u541379268_treasure";


  $host = "localhost";
  $username = "root";
  $password = "";
  $database = "treasure";
 
 $conn = mysqli_connect("$host","$username","$password","$database");

 if(!$conn)
 {
     echo "error to MYSQL(".$conn->error.")".($conn->error);
    echo "changes done";
 }
 else{
    //  echo "Connected Successfully";
 }

 ?>