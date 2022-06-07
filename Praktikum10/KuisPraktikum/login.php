<?php   
 session_start(); //Memulai Session
 $conn=mysqli_connect("localhost","root","","myweb"); // Koneksi ke MySQL
 $msg=""; //Variabel untuk pesan kesalahan
 if (isset($_POST['submit'])) { //Jika tombol submit ditekan  
      $email=mysqli_real_escape_string($conn,$_POST['email']);  
      $password=mysqli_real_escape_string($conn,$_POST['password']);  
      header("location:HalamanBeranda.php");
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
 <head>  
      <meta charset="utf-8">  
      <meta name="viewport" content="width=device-width, initial-scale=1">  
      <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"></link>
      <title>Form Login</title>
 </head>
 <body>
 <div class="main">
      <div class="card">
           <div class="card-body">
                <h2 class="text-center">Login</h2>  
                <form method="post" action="login.php" class="login">
                    <table width="300" align="center" cellpadding="2" cellspacing="2">
                         <tr>
                              <td>
                                   Email<input type="email" name="email" placeholder="Email" class="form-control" required>
                              </td>
                         </tr>
                         <tr>
                              <td>
                                   Password<input type="password" name="password" placeholder="Password" class="form-control" required>
                              </td>
                         </tr>
                    </table>               
                    <table width="700" align="center" cellpadding="0" cellspacing="2">
                         <tr>
                              <td>                        
                                   <div class="input">
                                        <button name="submit" class="btn" value="submit">Login</button>
                                   </div>
                              </td>
                              <td>                        
                                   <div class="input">
                                        <button type="reset" name="reset" class="btn" value="Reset">Reset</button>
                                   </div>
                              </td>
                         </tr>
                    </table>
                    <div class="error">
                         <!--Menampilkan pesan saat terjadi error-->
                         <?php echo $msg ?>
                    </div>
                </form>
                </div>                
           </div>
      </div>
 </div>
 </body>
 </html>