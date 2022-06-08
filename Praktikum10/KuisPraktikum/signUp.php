<?php   
session_start(); //Memulai Session
//Include file koneksi, untuk koneksikan ke database
include "koneksi.php";

$name = $_POST['name'];
$address = $_POST['address'];
$email = $_POST['email'];
$homepage = $_POST['homepage'];
$username = $_POST['username'];
$password = $_POST['password'];

$msg=""; //Variabel untuk pesan kesalahan

if (isset($_POST['submit'])) { //Jika tombol submit ditekan    
     $sql = "INSERT INTO user (name, address, email, homepage, username, password) 
     VALUES ('$name', '$address', '$email', '$homepage', '$username', '$password')";
     
     if (mysqli_query($conn, $sql)) {
         echo "<script>alert('Data Telah Ditambahkan')</script>";
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
     <!-- <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"></link> -->
     <title>Form Sign Up</title>
</head>
<body>
<div class="main">
     <div class="card">
          <div class="card-body">
               <h2 class="text-center">Sign Up</h2>  
               <form method="post" action="signUp.php" class="login">
                    <table width="300" align="center" cellpadding="2" cellspacing="2">
                         <tr>
                              <td>
                                   Name<input type="text" name="name" placeholder="Name" class="form-control" required>
                              </td>
                         </tr>
                         <tr>
                              <td>
                                   Address<input type="address" name="address" placeholder="Address" class="form-control" required>
                              </td>
                         </tr>
                         <tr>
                              <td>
                                   Email<input type="email" name="email" placeholder="Email" class="form-control" required>
                              </td>
                         </tr>
                         <tr>
                              <td>
                                   Homepage<input type="homepage" name="homepage" placeholder="Homepage" class="form-control" required>
                              </td>
                         </tr>
                         <tr>
                              <td>
                                   Username<input type="username" name="username" placeholder="Username" class="form-control" required>
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
                                        <button name="submit" class="btn btn-primary" value="submit">Sign Up</button>
                                   </div>
                              </td>
                              <td>                        
                                   <div class="input">
                                        <button type="reset" name="reset" class="btn btn-secondary" value="Reset">Reset</button>
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