<?php
   $servername = 'localhost';
   $username = 'root';
   $password = '';

 $conn = new mysqli($servername, $username, $password);

if($conn->connect_error){
  die("connection failed:".$conn->connect_error);
}

$sql = "CREATE DATABASE admin_portal";

if(mysqli_query($conn, $sql)){
  echo "Database created successfully.<br>";
}
else{
  echo "Error creating database: ". mysqli_error($conn);
}



?>