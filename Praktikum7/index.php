<?php 
 
include 'config.php';
 
error_reporting(0);
 
session_start();
 
if (isset($_SESSION['username'])) {
    header("Location: bukuTamu.php");
}
 
if (isset($_POST['submit'])) {
    $nama = ($_POST['nama']);
    $email = $_POST['email'];
    $isi = $_POST['isi'];

    $sql = "INSERT INTO tb_pegawai (id_bt, nama, email, isi)
    VALUES ('', '$nama', '$email', '$isi')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('New record created successfully')</script>";
    } else {
        echo "<script>alert(Error: " . $sql . "<br>" . mysqli_error($conn) . ")</script>";
    }
    mysqli_close($conn); 
}
 
?>
 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/stylesheet.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"></link>
    <title>Buku Tamu</title>
</head>
<body>
    <div class="alert alert-warning" role="alert">
        <?php echo $_SESSION['error']?>
    </div>
 
    <div class="container">
        <form action="bukuTamu.php" method="POST" class="login-email">
            <p class="bukuTamu-text" style="font-size: 2rem; font-weight: 800;">Buku Tamu</p>
            <div class="input-group">
                <input type="text" placeholder="Nama" name="nama" value="<?php echo $nama; ?>" required>
            </div>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
            </div>
            <div class="input-group">
                <input type="text" placeholder="Isi" name="isi" value="<?php echo $isi; ?>" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Submit</button>
            </div>
            <div class="input-group">
                <button name="reset" class="btn" type="reset" value="Reset">Reset</button>
            </div>
        </form>
    </div>
</div>
</body>
<footer>
    <!-- =========== COPYRIGHT =========== -->
    <div class="navbar">
        <p id="copyright">
            <i class="fa-regular fa-copyright"></i>
            <span class>safnr</span>
            <span>2022</span>
        </p>
    </div>
</footer>
</html>