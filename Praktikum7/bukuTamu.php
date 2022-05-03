<?php 
 
include 'config.php';
 
error_reporting(0);
 
session_start();

if (isset($_POST['save'])) {
    $nama = ($_POST['nama']);
    $email = $_POST['email'];
    $isi = $_POST['isi'];

    $sql = "BEGIN
    SAVE POINT my_save_point;
    END";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Save point created successfully')</script>";
    } else {
        echo "<script>alert(Error: " . $sql . "<br>" . mysqli_error($conn) . ")</script>";
    }
    mysqli_close($conn); 
}

if (isset($_POST['delete'])) {
    $nama = ($_POST['nama']);
    $email = $_POST['email'];
    $isi = $_POST['isi'];

    $sql = "DELETE FROM tb_pegawai
    WHERE id_bt = '$id_bt' or
    nama = '$nama' or
    email = '$email' or
    isi = '$isi'";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Delete successfully')</script>";
    } else {
        echo "<script>alert(Error: " . $sql . "<br>" . mysqli_error($conn) . ")</script>";
    }
    mysqli_close($conn); 
}

if (isset($_POST['edit'])) {
    $nama = ($_POST['nama']);
    $email = $_POST['email'];
    $isi = $_POST['isi'];

    $sql = "UPDATE tb_pegawai 
    SET nama = '$nama', email = '$email', isi = '$isi'
    WHERE id_bt = '$id_bt'";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert(' successfully')</script>";
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
            <div class="input-group">
                <button name="save" class="btn">Save</button>
            </div>
            <div class="input-group">
                <button name="delete" class="btn">Delete</button>
            </div>
            <div class="input-group">
                <button name="edit" class="btn">Edit</button>
            </div>
            <div class="input-group">
                <button name="reset" class="btn" type="reset" value="Reset">Reset</button>
            </div>
        </form>
    </div>
</body>
<footer>
    <div class="navbar">
        <p class="copyright">Copyright &copy; 2022 | safnr</a></p>
    </div>
</footer>
</html>