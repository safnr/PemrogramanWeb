<?php 
include 'koneksi.php';
$id = $_GET['id'];
mysql_query("DELETE FROM user guestbook id='$id'")or die(mysql_error());
 
header("location:data_guestbook.php?pesan=hapus");
?>