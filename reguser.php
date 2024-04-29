<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Details Registration</title>
    <style>
        /* Add your CSS styles here */
        /* For example: */
        /* .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #f9f9f9;
        } */
    </style>
</head>
<body>
    <div class="container">
        <h2>Login Details Registration</h2>

        <form action="register_login_details.php" method="post">
            <label for="userId">Enter User ID:</label>
            <input type="text" id="userId" name="userId" required>
            <button type="submit">Submit</button>
        </form>

        <?php
        // Check if user ID is submitted via POST
        if (isset($_POST['userId'])) {
            // Get the user ID from the form submission
            $userId = $_POST['userId'];

            // Generate the login details registration form based on the user ID
            echo '<h3>Registration Form for User ID: ' . $userId . '</h3>';
            echo '<form action="register_login_details_process.php" method="post">';
            echo '<input type="hidden" name="userId" value="' . $userId . '">';
            // Add input fields for login details (e.g., username, password)
            echo '<label for="username">Username:</label>';
            echo '<input type="text" id="username" name="username" required><br>';
            echo '<label for="password">Password:</label>';
            echo '<input type="password" id="password" name="password" required><br>';
            // Add more fields as needed
            echo '<button type="submit">Register</button>';
            echo '</form>';
        }
        ?>
    </div>
</body>
</html>
