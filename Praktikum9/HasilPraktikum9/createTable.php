<?php
//Memanggil file koneksi.inc.php
include 'koneksi.inc.php';

//Membuat tabel kontak
$sql = "CREATE TABLE kontak (
    id INT(4) AUTO_INCREMENT NOT NULL PRIMARY KEY,
    nama VARCHAR(30) NOT NULL,
    jenis_kelamin VARCHAR(10),
    email VARCHAR(40),
    alamat VARCHAR(50),
    kota VARCHAR(20),
    pesan text
    )";
//Mengecek apakah tabel tersebut berhasil atau gagal dibuat
if (mysqli_query($conn, $sql)) {
    echo "Table kontak created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

//Menutup Koneksi
mysqli_close($conn);
?>