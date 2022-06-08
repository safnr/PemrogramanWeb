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
                <form method="post" action="guestbook_.php" class="login">
                    <table width="300" align="center" cellpadding="2" cellspacing="2">
                         <tr>
                              <td>
                                   Posted<input type="date" name="posted" class="form-control id="posted" value="<?php echo $posted?>">
                            
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
                                        <button name="submit" class="btn btn-primary" value="submit">Submit</button>
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
                         <?php 
                         include "koneksi.php";
                         $msg=""; //Variabel untuk pesan kesalahan
                         echo $msg 
                         ?>
                    </div>
                </form>
                </div>                
           </div>
      </div>
 </div>
 </body>
 </html>