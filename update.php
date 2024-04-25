<?php

// PHP code to update data in a MySQL database table for a logged-in user

session_start(); // Start the session (make sure to start it in your login script)

if (isset($_POST['update'])) {
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "student_management_system";

    // Create a database connection
    $connect = mysqli_connect($hostname, $username, $password, $databaseName);

    if (!$connect) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Check if the user is logged in (you need to implement your own authentication logic)
    if (isset($_SESSION['username'])) {
        $loggedInUser = $_SESSION['username'];

        // Get values from input text and number
        $email = $_POST['email'];
        $contact = $_POST['contact'];

        // Update data in the 'users' table for the logged-in user
        $query = "UPDATE users SET email='$email', contact='$contact' WHERE username='$loggedInUser'";

        $result = mysqli_query($connect, $query);

        if ($result) {
            echo 'Data Updated';
    
           
        } else {
            echo 'Data Not Updated: ' . mysqli_error($connect);
        }
    } else {
        echo 'User not logged in.';
    }

    // Close the database connection
    mysqli_close($connect);
}
?>
