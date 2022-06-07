<?php   
 session_start();  
 $conn=mysqli_connect("localhost","root","","myweb");  
 if (!isset($_SESSION['USER_EMAIL'])) {  
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
      <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"></link>

      <style>  
           body{  
                justify-content: space-around;  
                font-family: 'Poppins', sans-serif;  
           }  
      </style>  
 </head>  
 <body>  
     <div class="card">
          <div class="card-body">
               <h2 class="text-center">Selamat Datang, <?php echo $_SESSION['USER_NAME']; ?> pada hari <?php echo date("d F Y"); ?>!)</h3>
          
          </div>
     </div>  
 </body>  
 </html>