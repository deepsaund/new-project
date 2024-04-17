<?php
// Start session
session_start();

include_once("../conn.php");

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST["username"];
    $user_type = $_POST["user_type"];

    // Query to check if the user exists based on username/email and user type
    $sql = "SELECT * FROM users WHERE (username='$username' OR email='$username') AND role='$user_type'";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        // Query execution error
        echo "Error: " . mysqli_error($conn);
    } elseif (mysqli_num_rows($result) == 1) {
        // User exists
        $row = mysqli_fetch_assoc($result);
        
        // Start session and store user data
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['role'] = $row['role'];
        
        // Redirect to dashboard or home page
       if($user_type == "student"){
        header("Location: ../student/home.php");

       }
       elseif($user_type == "faculty"){
        header("Location: ../faculty/home.php");

       }
       elseif($user_type == "admin"){
        header("Location: ../admin/home.php");

       }
        exit();
    } else {
        // User not found
        echo "User not found";
        // You can display an error message or take appropriate action for a failed login attempt
    }
}

// Close the database connection
mysqli_close($conn);
?>
