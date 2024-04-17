<?php

$host = 'localhost'; 
$username = 'root'; 
$password = ''; 
$database = 'std_mngmnt_sys'; 
$conn = mysqli_connect($host, $username, $password, $database);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


// echo "Connected successfully";


?>
