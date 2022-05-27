<?php
$host = "localhost"; //Nama host
$username = "root"; //Username
$password = ""; //Password
$dbname = "fina"; //Nama database

//Membuat koneksi
$conn = mysqli_connect($host, $username, $password, $dbname);
//Mengecek koneksi
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 

//Memindahkan nilai data form ke variabel sederhana agar mudah ditulis
$vnama=$_POST['nama'];
$vjenis_kelamin=$_POST['jenis_kelamin'];
$vemail=$_POST['email'];
$valamat=$_POST['alamat'];
$vkota=$_POST['kota'];
$vpesan=$_POST['pesan'];

//Memasukkan data ke tabel kontak
$sql="INSERT INTO kontak (id, nama, jenis_kelamin, email, alamat, kota, pesan) VALUES ('','$vnama','$vjenis_kelamin','$vemail','$valamat','$vkota','$vpesan')";
//Mengecek apakah data berhasil dimasukkan
mysqli_query($conn, $sql) or die("Proses simpan ke database gagal");
//Menutup koneksi
mysqli_close($conn);

//Memanggil file kontak.html sebelum dapat mengakses file simpan_kontak.php
header("location:kontak.html");
?>