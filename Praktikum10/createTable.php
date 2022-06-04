<?php
include 'koneksi.php'; //Memanggil file koneksi.php

//Membuat tabel user
$sql = "CREATE TABLE user (
    id INT(5) AUTO_INCREMENT NOT NULL PRIMARY KEY,
    name VARCHAR(50),
    address VARCHAR (50),
    email VARCHAR (50),
    homepage VARCHAR (50),
    username VARCHAR (25),
    password VARCHAR (25)
    )";
//Mengecek apakah tabel tersebut berhasil atau gagal dibuat
if (mysqli_query($conn, $sql)) {
    echo "Table user created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}
//Menutup koneksi
mysqli_close($conn);
?>