<?php   
session_start(); //Memulai Session
//Include file koneksi, untuk koneksikan ke database
include "koneksi.php";

 
 if (!isset($_SESSION['id'])) {  
    //   header("location:guestbook_.php");  
    //   die(); 

//Menyeleksi data dari tabel guestbook
$sql = "SELECT * from guestbook order by id;";
$qry = mysqli_query($conn, $sql) or die("Proses cetak gagal");

if ($hasil = mysqli_fetch_row($qry)) {

?> 
<!DOCTYPE html>  
<html>  
<head>        
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"></link>
    <title>Dashboard</title>  
    <style>  
        body{  
            justify-content: space-around;  
            font-family: 'Poppins', sans-serif;  
        }  
        table {
            background-color:white; 
            color:black;
            width:85%;
        }
        table th th , table tr td{
	        padding: 10px 20px	;
        }
      </style>  
</head>  
<body>  
    <!-- Menampilkan data dari tabel guestbook -->
    <table align="center" cellpadding="2" cellspacing="0" border="1">
    <tr>
        <th>No</th>
        <th>Posted</th>
        <th>Name</th>
        <th>Email</th>
        <th>Address</th>
        <th>City</th>
        <th>Pesan</th>
        <th>Option</th>
    </tr>    
    <tr>
        <td><?php echo $hasil[0]; ?></td>
		<td><?php echo $hasil[1]; ?></td>
		<td><?php echo $hasil[2]; ?></td>
		<td><?php echo $hasil[3]; ?></td>
        <td><?php echo $hasil[4]; ?></td>
        <td><?php echo $hasil[5]; ?></td>
        <td><?php echo $hasil[6]; ?></td>
        <td>
            <a href="edit.php" echo $qry['id'];>Edit</a> | <a href="delete.php" echo $qry['id'];>Hapus</a>
		</td>
	</tr>        
    </table>  
    <?php } } ?>
 </body>  
 </html>