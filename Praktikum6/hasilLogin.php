<?php
if (empty($_POST['nama'])
    || empty($_POST['email'])) {
    header("Location: kosong.php");
} else {
    echo "<center>Nama : " .$_POST['nama']."</center><br>";
    echo "<center>Email : " .$_POST['email']."</center><br>";
    echo "<center>Waktu Login : " .date("m-F-Y, g:i:s a");
}
?>