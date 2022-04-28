<html>
    <head>
        <title>Koneksi Database MySQL</title>
    </head>
    <body>
        <h1>Demo Koneksi Database MySQL</h1>
        <?php
        $con = mysqli_connect("localhost","root","","my_db");
        
        // Check connection
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL : " . mysqli_connect_error();
            exit();
        } else {
            echo "Success to connect to MySQL";
        }
        ?>
    </body>
</html>