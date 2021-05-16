<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "mobile";

$conn = mysqli_connect($dbServername, $dbUsername,$dbPassword,$dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
?>