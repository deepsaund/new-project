<?php

$hostname= 'localhost';
$username = 'root';
$password = '';
$db_name= 'std_mngmnt_sys';

// $conn = mysqli_connect($hostname, $username, $password, $db_name);
$conn = mysqli_connect($hostname, $username, $password, $db_name);		

if(!$conn){
	die('Connection Error'.mysqli_connect_error());
}
else{
	// echo "Connected Successfully";
}


?>