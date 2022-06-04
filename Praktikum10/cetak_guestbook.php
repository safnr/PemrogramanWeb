<?php   
 session_start();  
 $conn=mysqli_connect("localhost","root","","myweb");  
 if (!isset($_SESSION['USER_ID'])) {  
      header("location:guestbook.php");  
      die();  
 }  

 if (isset($_POST['delete'])) {
     $posted = ($_POST['posted']);
     $name = ($_POST['name']);
     $email = ($_POST['email']);
     $address = ($_POST['address']);
     $city = ($_POST['city']);
     $message = ($_POST['message']);
 
     $sql = "DELETE FROM guestbook WHERE name = '$name'";
 
     if (mysqli_query($conn, $sql)) {
         echo "<script>alert('Data Telah Dihapus')</script>";
     } else {
         echo "<script>alert(Error: " . $sql . "<br>" . mysqli_error($conn) . ")</script>";
     }
     mysqli_close($conn); 
 }
 
 if (isset($_POST['edit'])) {
     $posted = ($_POST['posted']);
     $name = ($_POST['name']);
     $email = ($_POST['email']);
     $address = ($_POST['address']);
     $city = ($_POST['city']);
     $message = ($_POST['message']);
 
     $sql = "UPDATE guestbook
     SET posted = '$posted', email = '$email', address = '$address', city = '$city', message = '$message'
     WHERE name = '$name'";
 
     if (mysqli_query($conn, $sql)) {
         echo "<script>alert('Data Telah Diupdate')</script>";
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
      <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"></link>
      
      <title>Dashboard</title>  
      <style>  
           body{  
                justify-content: space-around;  
                font-family: 'Poppins', sans-serif;  
           }  
      </style>  
 </head>  
 <body>  
 <table width="700" align="center" cellpadding="0" cellspacing="2">
      <tr>
          <td>
               <div class="input">
                    <button name="edit" class="btn">Edit</button>
                    </div>
          </td>
          <td>
               <div class="input">
                    <button name="delete" class="btn">Delete</button>
               </div>
          </td>
          <td>                        
               <div class="input">
                    <button type="reset" name="reset" class="btn" value="Reset">Reset</button>
               </div>
          </td>
     </tr>
 </table>
 </body>  
 </html>