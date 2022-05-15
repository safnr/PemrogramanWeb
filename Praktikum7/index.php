<?php 
 
include 'config.php';
 
error_reporting(0);
 
session_start();
 
if (isset($_POST['submit'])) {
    $nama = ($_POST['nama']);
    $email = ($_POST['email']);
    $isi = ($_POST['isi']);

    $sql = "INSERT INTO buku_tamu
    VALUES ('$nama', '$email', '$isi','')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Data Telah Ditambahkan')</script>";
        $_SESSION['nama'] = $row['nama'];
        header("Location: print_bukuTamu.php");
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
    <title>Buku Tamu</title>
</head>
<body>
    <div class="alert alert-warning" role="alert">
        <?php echo $_SESSION['error']?>
    </div>
 
    <div class="container">
        <form action="print_bukuTamu.php" method="POST" class="login-email">
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
            <table width="700" align="center" cellpadding="0">
                <tr>
                    <td>
                        <div class="input">
                            <button name="submit" class="btn">Submit</button>
                        </div>
                    </td>
                    <td>
                        <div class="input">
                            <button name="reset" class="btn" type="reset" value="Reset">Reset</button>
                        </div>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>
<footer>
    <div class="navbar">
        <p class="copyright">Copyright &copy; 2022 | safnr</a></p>
    </div>
</footer>
</body>
</html>