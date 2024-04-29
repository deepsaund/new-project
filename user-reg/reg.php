<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Registration</title>
  <!-- <link rel="stylesheet" href="styles.css"> -->
  <script src="script.js" defer></script>  
  
</head>

<body>
<section class="CONTENT">
  <div class="containerr" id=user_add>
    <header>Add user</header>

    <form action="../user-reg/register.php" method="post" id="registrationForm" onsubmit="return validateForm()">
      <div class="details">
        <span class="title">User Details</span>

        <div class="fields">
          <div class="input-fields">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
          </div>
        </div>
        <div class="fields">
          <div class="input-fields">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
          </div>
        </div>
        <div class="fields">
          <div class="input-fields">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
          </div>
        </div>
        <div class="fields">
          <div class="input-fields">
            <label for="role">User-type:</label>
            <select name="role">
              <option value="student">STUDENT</option>
              <option value="faculty">FACULTY</option>
              <option value="admin">ADMIN</option>
            </select>
          </div>
        </div>


        <button type="submit" class="submitBtn">
          <span class="btnText">Submit</span>
          <i class="uil uil-navigator"></i></button>
      </div>
    </form>

  </div>
</section>
</body>

</html>