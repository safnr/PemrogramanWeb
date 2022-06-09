<!DOCTYPE html>
<html>
<head>
    <title>Form Edit</title>
</head>
<body>
    <?php
    include "koneksi.php";
    $sql = "SELECT * from guestbook WHERE id='$id';";
    $qry = mysqli_query($conn, $sql) or die("Proses cetak gagal");
	$nomor = 1;
	while($data = mysqli_fetch_array($query_mysql)){
	?>
	<form action="update.php" method="post">		
		<table>
			<tr>
				<td>Nama</td>
				<td>
					<input type="text" name="name" value="<?php echo $data['name'] ?>">
				</td>					
			</tr>	
            <tr>
                <td>Email</td>
                <td>
                    <input type="text" name="email" value="<?php echo $data['email'] ?>">
                </td>
            </tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="address" value="<?php echo $data['address'] ?>"></td>					
			</tr>	
            <tr>
                <td>Kota</td>
                <td>
                    <input type="text" name="city" value="<?php echo $data['city'] ?>">
                </td>
            </tr>	
            <tr>
                <td>Pesan</td>
                <td>
                    <input type="text" name="message" value="<?php echo $data['message'] ?>">
                </td>
            </tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan">Update</td>					
			</tr>				
		</table>
	</form>
	<?php } ?>
</body>
</html>
        
</body>
</html>