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
     <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"></link>
</head>
<body>
     <div class="card">
          <div class="card-body">
               <h2 class="text-center">Logout</h2>
               <p>Anda telah berhasil logout!</p>
               <p>Klik <a href="index.php">disini</a> untuk login kembali.</p>
          </div>
     </div>
</body>
</html>