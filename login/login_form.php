
<?php
session_start();
if(isset($_COOKIE['username'])){
    $_SESSION['username']= $_COOKIE['username'];
    $_SESSION['user_type']= $_COOKIE['user_type'];
    $user_type= $_COOKIE['user_type'];
    if($user_type=='admin'){
        header('location:admin/home.php');
    }
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>User Login</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container">
  <div class="center">
  <form action="login.php" method="post" id="loginForm">
    <h2>User Login</h2>
    <div class="form-group">
      <label for="username">Username/Email:</label>
      <input type="text" id="username" name="username" required>
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
    </div>
    <div class="form-group">
      <label for="user_type">User Type:</label>
      <select id="user_type" name="user_type" required>
        <option value="student">Student</option>
        <option value="faculty">Faculty</option>
        <option value="admin">Admin</option>
      </select>
    </div>
    <button type="submit" name="login_press">Login</button>
  </form>
  </div>
</div>
</body>
</html>
