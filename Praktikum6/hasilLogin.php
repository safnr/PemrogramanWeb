<!DOCTYPE html>
<head>
    <title>Info Login</title>
</head>
<body>
    <?php
    if (empty($_POST['nama'])
        || empty($_POST['email'])) {
        header("Location: kosong.php");
    } else {
        $nama=$_POST['nama'];
        $email=$_POST['email'];
    }
    ?> 
    <h2 align="center">Info Login</h2>   
     <table align="center" cellpadding="8" cellspacing="0">
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td> <?php echo $nama ?> </td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td> <?php echo $email ?> </td>
        </tr>
        <tr>
            <td>Waktu Login</td>
            <td>:</td>
            <td> <?php echo date("m-F-Y, g:i:s a"); ?> </td>        
        </tr>
 </table>
</body>
</html>