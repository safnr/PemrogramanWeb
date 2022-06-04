<?php   
 session_start(); //Memulai Session
 $conn=mysqli_connect("localhost","root","","myweb"); // Koneksi ke MySQL
 $msg=""; //Variabel untuk pesan kesalahan
 if (isset($_POST['submit'])) { //Jika tombol submit ditekan  
      $email=mysqli_real_escape_string($conn,$_POST['email']);  
      $password=mysqli_real_escape_string($conn,$_POST['password']);  
      $sql=mysqli_query($conn,"select * from login where username='$email' && password='$password'");  
      $num=mysqli_num_rows($sql);  
      //Jika username dan password ada yang sesuai
      if ($num>0) {
           //jika login berhasil  
           $row=mysqli_fetch_assoc($sql);  
           $_SESSION['USER_ID']=$row['id'];  
           $_SESSION['USER_POSTED']=$row['POSTED'];  
           $_SESSION['USER_NAME']=$row['name'];  
           $_SESSION['USER_EMAIL']=$row['email'];
           $_SESSION['USER_ADDRESS']=$row['address'];    
           $_SESSION['USER_CITY']=$row['city'];  
           $_SESSION['USER_MESSAGE']=$row['message'];  
           header("location:cetak_guestbook.php");
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
      <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"></link>
      <title>Form GuestBook</title>
 </head>
 <body>
 <div class="main">
      <div class="card">
           <div class="card-body">
                <h2 class="text-center">GuestBook</h2>  
                <form method="post" action="guestbook.php" class="login">
                    <table width="300" align="center" cellpadding="2" cellspacing="2">
                         <tr>
                              <td>
                                   Posted<input type="date" name="tanggal_masuk_sekolah" class="form-control <?php echo ($error_tanggal_masuk_sekolah !="" ? "is-invalid" : ""); ?>" id="tanggal_masuk_sekolah" placeholder="Tanggal Masuk Sekolah" value="<?php echo $tanggal_masuk_sekolah;?>">
                            
                              </td>
                         </tr>
                         <tr>
                              <td>
                                   Name<input type="text" name="name" placeholder="Name" class="form-control" required>
                              </td>
                         </tr>
                         <tr>
                              <td>
                                   Email<input type="email" name="email" placeholder="Email" class="form-control" required>
                              </td>
                         </tr>
                         <tr>
                              <td>
                                   Address<input type="address" name="address" placeholder="Address" class="form-control" required>
                              </td>
                         </tr>
                         <tr>
                              <td>
                                   City<input type="city" name="city" placeholder="City" class="form-control" required>
                              </td>
                         </tr>
                         <tr>
                              <td>
                                   Message<input type="longblob" name="message" placeholder="Message" class="form-control" required></textarea>
                              </td>
                         </tr>
                    </table>               
                    <table width="700" align="center" cellpadding="0" cellspacing="2">
                         <tr>
                              <td>                        
                                   <div class="input">
                                        <button name="submit" class="btn" value="submit">Submit</button>
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