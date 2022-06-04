<?php   
 session_start();  
 $conn=mysqli_connect("localhost","root","","myweb");  
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
      <title>Halaman Beranda</title>  
      <style>  
           body{  
                justify-content: space-around;  
                font-family: 'Poppins', sans-serif;  
           }  
      </style>  
 </head>  
 <body>  
     <center><h1>Selamat Datang, <?php echo $_SESSION['NAME'] ?>! ;)</h1></center>
     <br><br><br>
     <center><h1>Pada Hari<?php echo $_SESSION['POSTED'] ?>! ;)</h1></center>

     <h3><a href="logout.php">Logout</a></h3>  
 </body>  
 </html>