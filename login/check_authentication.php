<?php
session_start();
include_once '../connection.php';
if(isset($_POST['login_press'])){

	$username= $_POST['username'];
	$password = md5($_POST['password']);

	//query_to_fetch_data
	$query = "Select * from users where username='".$username."' 
	and password='".$password."'";

	//echo $query;
	//exit(0);

	$result = mysqli_query($conn, $query) or die('Query Error');

	if(mysqli_num_rows($result)==1){
		
		while($row=mysqli_fetch_array($result)){

			$user_type = $row['user_type'];
			$_SESSION['username']= $username;
			$_SESSION['user_type']= $user_type;
			
			if(isset($_POST['remember_me'])){
				setcookie('username',$username,time()+86400);
				setcookie('user_type',$user_type,time()+86400);
			}

			if($user_type=='admin'){
				header('location:admin/home.php');
			}
			elseif($user_type=='faculty'){
				header('location:faculty/home.php');
			}
			elseif($user_type=='student'){
				header('location:student/home.php');
			}

		}


	}else{
		echo 'User not found or the combination of username and password is wrong';
	}


}else{
	header('location:index.php');
}

?>