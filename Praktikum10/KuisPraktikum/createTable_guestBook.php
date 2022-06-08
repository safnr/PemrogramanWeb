<?php
include 'koneksi.php'; //Memanggil file koneksi.php

//Membuat tabel guestbook
$sql = "CREATE TABLE guestbook (
    id INT(5) AUTO_INCREMENT NOT NULL PRIMARY KEY,
    posted date,
    name VARCHAR (50),
    email VARCHAR (75),
    addresss VARCHAR (75),
    city VARCHAR (25),
    message longblob
    )";
//Mengecek apakah tabel tersebut berhasil atau gagal dibuat
if (mysqli_query($conn, $sql)) {
    echo "Table guestbook created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}
//Menutup koneksi
mysqli_close($conn);
?>