<?php   
 session_start();  
 $conn=mysqli_connect("localhost","root","","myweb");  
//  if (!isset($_SESSION['USER_ID'])) {  
//       header("location:guestbook_.php");  
//       die();  
//  }  

//Menyeleksi data dari tabel guestbook
$sql = "SELECT * from guestbook order by id;";
$qry = mysqli_query($conn, $sql) or die("Proses cetak gagal");


//Menampilkan data dari tabel guestbook
echo "<center><table width='75%' cellpadding='2' cellspacing='0' border='1' style='
background-color:white; color:black;'>
<tr>
<th>No</th>
<th>Posted</th>
<th>Name</th>
<th>Email</th>
<th>Address</th>
<th>City</th>
<th>Pesan</th>
<th>Option</th>
<tr>
<tr></th>";

$nomor=1;
while($hasil=mysqli_fetch_row($qry)){
echo "<tr>
<td>$hasil[0]</td>
<td>$hasil[1]</td>
<td>$hasil[2]</td>
<td>$hasil[3]</td>
<td>$hasil[4]</td>
<td>$hasil[5]</td>
<td>$hasil[6]</td>
</tr>";
$nomor++;
}
echo "</table>";

//Tombol
 if (isset($_POST['delete'])) {
     $posted = ($_POST['posted']);
     $name = ($_POST['name']);
     $email = ($_POST['email']);
     $address = ($_POST['address']);
     $city = ($_POST['city']);
     $message = ($_POST['message']);
 
     $sql = "DELETE FROM guestbook WHERE name = '$name'";
 
     if (mysqli_query($conn, $sql)) {
         echo "<script>alert('Data Telah Dihapus')</script>";
     } else {
         echo "<script>alert(Error: " . $sql . "<br>" . mysqli_error($conn) . ")</script>";
     }
     mysqli_close($conn); 
 }
 
 if (isset($_POST['edit'])) {
     $posted = ($_POST['posted']);
     $name = ($_POST['name']);
     $email = ($_POST['email']);
     $address = ($_POST['address']);
     $city = ($_POST['city']);
     $message = ($_POST['message']);
 
     $sql = "UPDATE guestbook
     SET posted = '$posted', email = '$email', address = '$address', city = '$city', message = '$message'
     WHERE name = '$name'";
 
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
      <meta name="viewport" content="width=device-width, initial-scale=1">        
      <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"></link>
      
      <title>Dashboard</title>  
      <style>  
          body{  
               justify-content: space-around;  
               font-family: 'Poppins', sans-serif;  
          }  
          table {
          }
      </style>  
 </head>  
 <body>  
 <table width="700" align="center" cellpadding="0" cellspacing="2">
      <tr>
          <td>
               <div class="input">
                    <button name="edit" class="btn btn-primary">Edit</button>
                    </div>
          </td>
          <td>
               <div class="input">
                    <button name="delete" class="btn btn-danger">Delete</button>
               </div>
          </td>
          <td>                        
               <div class="input">
                    <button type="reset" name="reset" class="btn btn-secondary" value="Reset">Reset</button>
               </div>
          </td>
     </tr>
     <tr>
          <td>
          <div class="input">
                    <button type="reset" name="reset" class="btn btn-secondary" value="Reset">Reset</button>
               </div>
          </td>
     </tr>
 </table>
 </body>  
 </html>