<?php
$servername = 'localhost';
$username = 'root';
$password = '';

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
  die("connection failed:" . $conn->connect_error);
}
$dbname = "admin_portal";
$sql = "CREATE DATABASE $dbname";

if (mysqli_query($conn, $sql)) {
  echo "Database created successfully.<br>";
} else {
  echo "Error creating database: " . mysqli_error($conn);
}
//connect to database
mysqli_select_db($conn, $dbname);

//create table

$table = "CREATE TABLE admins(id int UNSIGNED AUTO_INCREMENT PRIMARY KEY, username VARCHAR(30) NOT NULL, password VARCHAR(255) NOT NULL)";

if (mysqli_query($conn, $table)) {
  echo "Table Created Successfully.<br>";
} else {
  echo "Error Creating table: " . mysqli_error($conn);
}

?>