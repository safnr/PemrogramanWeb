<!DOCTYPE html>
<head>
    <title>Info Login</title>
</head>
<body>
    <?php
    if (empty($_POST['nama'])
        || empty($_POST['tempat'])
        || empty($_POST['tgl'])
        || empty($_POST['bln'])
        || empty($_POST['thn'])
        || empty($_POST['jk'])
        || empty($_POST['alamat'])) {
        header("Location: kosong.php");
    } else {
        $nama=$_POST['nama'];
        $tgl=$_POST['tgl'];
        $bln=$_POST['bln'];
        $thn=$_POST['thn'];
        $jk=$_POST['jk'];
        $alamat=$_POST['alamat'];
        $tempat=$_POST['tempat'];
        $tanggal=$tgl."-".$bln."-".$thn;
    }
    ?> 
    <h2 align="center">Biodata</h2>   
     <table align="center" border="1" cellpadding="8" cellspacing="0">
        </tr>
        <tr>
            <td>Nama</td>
            <td> <?php echo $nama ?> </td>
        </tr>
        <tr>
            <td>TTL</td>
            <td> <?php echo $tempat ?>,<?php echo $tgl ?> <?php echo $bln ?> <?php echo $thn ?> </td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td> <?php echo $jk ?> </td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td> <?php echo $alamat ?> </td>
        </tr>
 </table>
</body>
</html>