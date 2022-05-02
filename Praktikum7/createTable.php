<?php
include 'config.php';

// Create
$sql = "CREATE TABLE tb_pegawai (
    id_bt INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(200) NOT NULL,
    email VARCHAR(50) NOT NULL,
    isi TEXT NOT NULL");
?>