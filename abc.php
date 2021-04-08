<?php
$servername = "database1.caefmhnhzvgd.ap-southeast-1.rds.amazonaws.com";
$username = "admin";
$password = "vishal2000";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>