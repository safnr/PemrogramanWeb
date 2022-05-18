<?php
include 'config.php';

// Create
$sql = "CREATE TABLE tb_registrasiPesertaDidik (
    id_pd INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    jenis_pendaftaran VARCHAR(10) NOT NULL,
    tanggal_masuk_sekolah date NOT NULL,
    nis CHAR(10) NOT NULL,
    nomor_peserta_ujian CHAR(20) NOT NULL,
    apakah_pernah_paud VARCHAR(5) NOT NULL,
    apakah_pernah_tk VARCHAR(5) NOT NULL,
    no_seri_skhun_sebelumnya CHAR(16) NOT NULL,
    no_seri_ijazah_sebelumnya CHAR(16) NOT NULL,
    hobi VARCHAR(50) NOT NULL,
    cita_cita VARCHAR(50) NOT NULL
    )";
if (mysqli_query($conn, $sql)) {
    echo "Table tb_registrasiPesertaDidik created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);
?>