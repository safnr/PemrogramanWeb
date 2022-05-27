<?php
include 'koneksi.inc.php'; //Memanggil file koneksi.inc.php

//Membuat tabel login
$sql = "CREATE TABLE login (
    id INT(4) AUTO_INCREMENT NOT NULL PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    password VARCHAR(10)
    )";
//Mengecek apakah tabel tersebut berhasil atau gagal dibuat
if (mysqli_query($conn, $sql)) {
    echo "Table login created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}
//Menutup koneksi
mysqli_close($conn);
?>