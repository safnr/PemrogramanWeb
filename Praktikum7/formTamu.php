<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Buku Tamu</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body style="
padding: 50px; 
background-color: #272730;
font-family: 'Poppins', sans-serif;
">
    <div class="header" style="
    color: #dee7ec;">
        <h2 align="center">Form Buku Tamu</h2>
    </div>
    <div class="main" style="
    padding: 90px 50px;
    height: 100px;
    margin: 0px 350px;
    border-radius: 15px;
    background-color: #fff;
    ">
        <form method="POST" action="bukuTamu.php">
        
        <table width="300" align="center" cellpadding="2" cellspacing="2">
            <tr>
                <td width="130">Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td width="130">Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td width="130">Isi</td>
                <td>
                    <textarea rows="5" cols="26" name="isi" id="isi"></textarea>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="btnSubmit" value="Submit"
                    <?php
                    include 'config.php';
                    // Insert
                    $sql = "INSERT INTO tb_pegawai (id_bt, nama, email, isi)
                    VALUES ('', '$nama', '$email', '$isi')";

                    if (mysqli_query($conn, $sql)) {
                        echo "New record created successfully";
                    } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
                    mysqli_close($conn);
                    ?>
                    >
                    <input type="reset" name="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
    </div>
</body>
</html>