<?php   
 session_start();  
 $conn=mysqli_connect("localhost","root","","db_login");  
 if (!isset($_SESSION['USER_ID'])) {  
      header("location:index.php");  
      die();  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
 <head>  
      <meta charset="utf-8">  
      <meta name="viewport" content="width=device-width, initial-scale=1">  
      <title>Dashboard</title>  
      <style>  
           body{  
                justify-content: space-around;  
                font-family: 'Poppins', sans-serif;  
           }  
      </style>  
 </head>  
 <body>  
     <center><h1>Selamat Datang, <?php echo $_SESSION['USER_NAME'] ?>! ;)</h1></center>
     <br><br><br>
     <h3><a href="logout.php">Logout</a></h3>  
 </body>  
 </html>