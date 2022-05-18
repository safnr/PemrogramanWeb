<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bukti Pendaftaran</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<?php
    //Include file koneksi, untuk koneksikan ke database
    include "config.php";

    //Mengecek inputan dari form registrasi peserta didik dan data pribadi
    if (isset($_POST['nama_lengkap'])) {
        $nama_lengkap = $_POST["nama_lengkap"];
    
        $sql = "select * from tb_dataPribadi where nama_lengkap=$nama_lengkap";
        $hasil = mysqli_query($conn, $sql);
        while ($data = mysqli_fetch_array($hasil)) {
            ?>
            <option value="<?php echo  $data['nama_lengkap']; ?>"><?php echo ucwords($data['nama_lengkap']); ?></option>
            <?php
        }
    }
?>
</body>
</html>