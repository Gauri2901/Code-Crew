<?php
$servername = "localhost";
$username = "root";
$password = "Root@123";

// Create connection
$conn = new mysqli($localhost, $root, $Root@123);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
$username=$_POST['username'];

$gmail=$_POST['gmail'];
$password=$_POST['password'];

$rpassword=$_POST['re enter password'];
?>