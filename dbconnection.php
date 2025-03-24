<?php
$servername = 'localhost';
$username = 'root';
$password = '';

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
  die("connection failed:" . $conn->connect_error);
}

//create database
$dbname = "admin_portal";
$sql = "CREATE DATABASE $dbname";

//connect to database
mysqli_select_db($conn, $dbname);

//create table
$table = "CREATE TABLE admins(id int UNSIGNED AUTO_INCREMENT PRIMARY KEY, username VARCHAR(30) NOT NULL, password VARCHAR(255) NOT NULL)";

mysqli_query($conn, $table)

  ?>