<?php
   $servername = 'localhost';
   $username = 'root';
   $password = '';

 $conn = new mysqli($servername, $username, $password);

if($conn->connect_error){
  die("connection failed:".$conn->connect_error);
}
$dbname = "admin_portal";
$sql = "CREATE DATABASE $dbname";

if(mysqli_query($conn, $sql)){
  echo "Database created successfully.<br>";
}
else{
  echo "Error creating database: ". mysqli_error($conn);
}
//connect to database
mysqli_select_db($conn, $dbname);
?>