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