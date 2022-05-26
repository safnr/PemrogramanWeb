<?php   
 session_start();  
 $conn=mysqli_connect("localhost","root","","db_login");  
 $msg="";  
 if (isset($_POST['submit'])) {  
      $email=mysqli_real_escape_string($conn,$_POST['email']);  
      $password=mysqli_real_escape_string($conn,$_POST['password']);  
      $sql=mysqli_query($conn,"select * from login where username='$email' && password='$password'");  
      $num=mysqli_num_rows($sql);  
      if ($num>0) {
           //jika login berhasil  
           $row=mysqli_fetch_assoc($sql);  
           $_SESSION['USER_ID']=$row['id'];  
           $_SESSION['USER_NAME']=$row['username'];  
           header("location:cetak.php");
           //jika login gagal (username/pw tidak sesuai)
      }else{  
           $msg="Mohon, Masukkan Data yang Valid!";  
      }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
 <head>  
      <meta charset="utf-8">  
      <meta name="viewport" content="width=device-width, initial-scale=1">  
      <link rel="stylesheet" type="text/css" href="css/style.css">  
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"></link>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <style>
          html {
               margin: 20px 60px;
          }
          .warning {
               color: #FF0000;
          }     
      </style>
      <title>Form Login</title>  
 </head>  
 <body>  
 <div class="main">  
      <div class="flex">  
           <div class="content">
                <h2 class="title">Login</h2>  
                <form method="post" action="">  
                     <label for="username">Username</label>  
                     <div class="box">  
                          <input type="text" name="email" placeholder="Username" class="form-control" required>  
                     </div>  
                     <label for="password">Password</label>  
                     <div class="box">  
                          <input type="password" name="password" placeholder="Password" class="form-control" required>  
                     </div>  
                     <div class="btn-box">  
                          <input type="submit" name="submit" value="Login" class="btn submit-btn">  
                     </div>  
                     <div class="error">  
                          <?php echo $msg ?>  
                     </div>  
                </form>  
           </div>  
      </div>  
 </div>  
 </body>  
 </html>  