<?php 
 
include 'config_db_pegawai.php';
 
error_reporting(0);
 
session_start();

$nama = $_POST['nama'];
$email = $_POST['email'];
$isi = $_POST['isi'];

if (isset($_POST['save'])) {

    $sql = "INSERT INTO tb_pegawai
    VALUES ('$nama', '$email', '$isi','')";"

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Save Point Telah Dibuat')</script>";
    } else {
        echo "<script>alert(Error: " . $sql . "<br>" . mysqli_error($conn) . ")</script>";
    }
    mysqli_close($conn); 
}

if (isset($_POST['delete'])) {
    $nama = ($_POST['nama']);
    $email = ($_POST['email']);
    $isi = ($_POST['isi']);

    $sql = "DELETE FROM tb_pegawai WHERE nama = '$nama'";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Data Telah Dihapus')</script>";
    } else {
        echo "<script>alert(Error: " . $sql . "<br>" . mysqli_error($conn) . ")</script>";
    }
    mysqli_close($conn); 
}

if (isset($_POST['edit'])) {
    $nama = ($_POST['nama']);
    $email = ($_POST['email']);
    $isi = ($_POST['isi']);

    $sql = "UPDATE tb_pegawai 
    SET email = '$email', isi = '$isi'
    WHERE nama = '$nama'";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Data Telah Diupdate')</script>";
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
            <table width="700" align="center" cellpadding="0" cellspacing="2">
                <tr>
                    <td>                        
                        <div class="input">
                            <button name="save" class="btn" value="save">Save</button>
                        </div>
                    </td>
                    <td>
                        <div class="input">
                            <button name="delete" class="btn" value="delete">Delete</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>                        
                        <div class="input">
                            <button name="edit" class="btn">Edit</button>
                        </div>
                    </td>
                    <td>                        
                        <div class="input">
                            <button type="reset" name="reset" class="btn" value="Reset">Reset</button>
                        </div>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
<footer>
    <div class="navbar">
        <p class="copyright">Copyright &copy; 2022 | safnr</a></p>
    </div>
</footer>
</html>