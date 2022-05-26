<?php
$servername = "localhost"; //Nama Server
$username = "root"; //Username Server
$password = ""; //Password Server

//Membuat koneksi
$conn = mysqli_connect($servername, $username, $password);
//Mengecek koneksi
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//Membuat database
$sql = "CREATE DATABASE db_login";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

//Menutup koneksi
mysqli_close($conn);
?>