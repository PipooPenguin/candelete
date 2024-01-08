<?php
$servername = "localhost:3306";
$username = "root";
$password = "Thanh31082003";
$mydb = "DIEMCACHLY";

$conn = new mysqli($servername, $username, $password,$mydb);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>