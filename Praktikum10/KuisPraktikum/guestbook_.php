<?php   
session_start(); //Memulai Session
//Include file koneksi, untuk koneksikan ke database
include "koneksi.php";

$posted = $_POST['posted'];
$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$city = $_POST['city'];
$message = $_POST['message'];

if (isset($_POST['submit'])) { //Jika tombol submit ditekan    
     $sql = "INSERT INTO guestbook (posted, name, email, address, city, message)      
     VALUES ('$posted', '$name', '$email', '$address', '$city', '$message')";
     
     if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Data Telah Ditambahkan')</script>";
     } else {
        echo "<script>alert(Error: " . $sql . "<br>" . mysqli_error($conn) . ")</script>";
     }
     mysqli_close($conn);
}  

//Memanggil file guestbook.php sebelum dapat mengakses file guestbook_.php
header("location:guestbook.php");
?>


?>
