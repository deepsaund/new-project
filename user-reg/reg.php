<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Registration</title>
  <link rel="stylesheet" href="styles.css">
  <script src="script.js" defer></script>
</head>

<body>
  <div class="container">
    <div class="center">
    <form action="register.php" method="post" id="registrationForm" onsubmit="return validateForm()">
      <h2>User Registration</h2>
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <label for="role">User-type:</label>
        <select name="role">
          <option value="student">STUDENT</option>
          <option value="faculty">FACULTY</option>
          <option value="admin">ADMIN</option>
        </select>
      

      <button type="submit">Register</button>
    </form>
  </div>
  </div>
</body>

</html>