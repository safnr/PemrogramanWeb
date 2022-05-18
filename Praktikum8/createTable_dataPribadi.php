<?php
include 'config.php';

// Create
$sql = "CREATE TABLE tb_dataPribadi (
    id_pd INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nama_lengkap VARCHAR(200) NOT NULL,
    jenis_kelamin VARCHAR(10) NOT NULL,
    nisn CHAR(10) NOT NULL,
    nik CHAR(16) NOT NULL,
    tempat_lahir VARCHAR(50) NOT NULL,
    tanggal_lahir date NOT NULL,
    agama VARCHAR(50) NOT NULL,
    berkebutuhan_khusus VARCHAR(50) NOT NULL,
    alamat_jalan VARCHAR(200) NOT NULL,
    rt CHAR(3) NOT NULL,
    rw CHAR(3) NOT NULL,
    nama_dusun VARCHAR(50) NOT NULL,
    nama_kelurahan_desa VARCHAR(50) NOT NULL,
    kecamatan VARCHAR(50) NOT NULL,
    kode_pos CHAR(5) NOT NULL,
    tempat_tinggal VARCHAR(50) NOT NULL,
    moda_transportasi VARCHAR(50) NOT NULL,
    nomor_hp CHAR(12) NOT NULL,
    nomor_telepon CHAR(12) NOT NULL,
    email_pribadi VARCHAR(50) NOT NULL,
    penerima_kps_pkh_kip VARCHAR(5) NOT NULL,
    no_kps_pkh_kip VARCHAR(50) NOT NULL,
    kewarganegaraan VARCHAR(50) NOT NULL
    )";
if (mysqli_query($conn, $sql)) {
    echo "Table tb_dataPribadi created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);
?>