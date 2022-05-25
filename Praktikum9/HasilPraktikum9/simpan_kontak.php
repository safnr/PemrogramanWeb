<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "fina";

$conn = mysqli_connect($host, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 

//memindahkan nilai data form ke variabel sederhana agar mudah ditulis
$vnama=$_POST['nama'];
$vjenis_kelamin=$_POST['jenis_kelamin'];
$vemail=$_POST['email'];
$valamat=$_POST['alamat'];
$vkota=$_POST['kota'];
$vpesan=$_POST['pesan'];

$sql="INSERT INTO kontak (id, nama, jenis_kelamin, email, alamat, kota, pesan) VALUES ('','$vnama','$vjenis_kelamin','$vemail','$valamat','$vkota','$vpesan')";

mysqli_query($conn, $sql) or die("Proses simpan ke database gagal");
mysqli_close($conn);


header("location:kontak.html");
?>