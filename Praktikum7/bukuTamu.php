<?php
if(isset($_POST['btnSubmit'])){
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $isi = $_POST['isi'];
    $tanggal = date("d-m-Y");
    $jam = date("H:i:s");
    $tampil = "Nama : $nama <br> Email : $email <br> Isi : $isi <br> Tanggal : $tanggal <br> Jam : $jam";
    echo $tampil;
}
?>