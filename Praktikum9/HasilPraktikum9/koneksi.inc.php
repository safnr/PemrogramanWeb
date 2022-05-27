<?php
$host = "localhost"; //Nama host
$username = "root"; //Username
$password = ""; //Password
$dbname = "fina"; //Nama database

// Create connection
$conn = mysqli_connect($host, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 
?>