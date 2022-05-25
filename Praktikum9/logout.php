<?php   
 session_start();  
 $conn=mysqli_connect("localhost","root","","db_login");  
 if (!isset($_SESSION['USER_ID'])) {  
      header("location:login.php");  
      die();  
 }  
?>
<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Logout</title>
</head>
<body>
     <center><h1>Terima Kasih, <?php echo $_SESSION['USER_NAME'] ?>! ;)</h1></center><br>
     <h3><a href="index.php">Kembali ke Halaman Awal</a></h3>
</body>
</html>