<?php 
 
include 'koneksi.php';
$posted = date('Y-m-d', strtotime($_POST['posted']));
$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$city = $_POST['city'];
$message = $_POST['message']; 
mysql_query("UPDATE guestbook SET posted='$posted', name='$name', email='$email', address='$address', city='$city', message='$message' WHERE id='$id'");
 
header("location:data_guestbook.php?pesan=update");
?>