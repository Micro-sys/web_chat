<?php

$dbHost ="localhost";
$dbUsername ="root";
$dbPassword ="";
$dbDatabase ="tutorial_db";
$conn=mysqli_connect($dbHost,$dbUsername,"",$dbDatabase);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

?>