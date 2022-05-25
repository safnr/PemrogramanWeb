<?php
include 'koneksi.inc.php';

// Create
$sql = "CREATE TABLE login (
    id INT(4) AUTO_INCREMENT NOT NULL PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    password VARCHAR(10)
    )";
if (mysqli_query($conn, $sql)) {
    echo "Table kontak created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);
?>