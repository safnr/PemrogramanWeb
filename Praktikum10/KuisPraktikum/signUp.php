<?php   
session_start(); //Memulai Session
//Include file koneksi, untuk koneksikan ke database
include "koneksi.php";

$name = $_POST['name'];
$address = $_POST['address'];
$email = $_POST['email'];
$homepage = $_POST['homepage'];
$username = $_POST['username'];
$password = $_POST['password'];

$msg=""; //Variabel untuk pesan kesalahan

if (isset($_POST['submit'])) { //Jika tombol submit ditekan    
     $sql = "INSERT INTO user (name, address, email, homepage, username, password) 
     VALUES ('$name', '$address', '$email', '$homepage', '$username', '$password')";
     
     if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Data Telah Ditambahkan')</script>";
     } else {
        echo "<script>alert(Error: " . $sql . "<br>" . mysqli_error($conn) . ")</script>";
     }
     mysqli_close($conn);
}  

//Memanggil file signUp.html sebelum dapat mengakses file signUp.php
header("location:signUp.html");
?>