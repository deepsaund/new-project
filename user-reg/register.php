<?php
// Start session
session_start();

include_once("../conn.php");

                                        // Handle form submission

                                        
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $role = $_POST["role"];


                                        // checking user_error        


    // Check if username already exists
    $check_username_query = "SELECT * FROM users WHERE username='$username'";
    $check_username_result = mysqli_query($conn, $check_username_query);

    // Check if email already exists
    $check_email_query = "SELECT * FROM users WHERE email='$email'";
    $check_email_result = mysqli_query($conn, $check_email_query);

    if (mysqli_num_rows($check_username_result) > 0) {
        // User with the same username already exists
        echo "User with the same username already exists. Please choose a different username.";
    } elseif (mysqli_num_rows($check_email_result) > 0) {
        // User with the same email already exists
        echo "User with the same email already exists. Please choose a different email address.";
    } 
    
                                            // insertion part                                       
    else {
        // Insert new user data into the database
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $insert_query = "INSERT INTO users (username, email, password, role) VALUES ('$username', '$email', '$hashed_password', '$role')";

        if (mysqli_query($conn, $insert_query)) {
            // User registration successful
            echo "User registration successful. You can now log in.";
        } else {
            // Error handling - failed to insert user data
            echo "Error: " . mysqli_error($conn);
        }
    }
}

// Close the database connection
mysqli_close($conn);
?>
