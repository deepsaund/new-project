<?php
// Check if form data is submitted using POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if userId is provided in the POST data
    if (isset($_POST['userId']) && !empty($_POST['userId'])) {
        // Retrieve form data
        $userId = $_POST['userId'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Insert login details into the database (you need to modify this part according to your database structure)
        // Database connection parameters
      include('connection.php');

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare SQL statement to insert login details
        $sql = "INSERT INTO users (user_id, username, password) VALUES ('$userId', '$username', '$password')";

        // Execute SQL query
        if ($conn->query($sql) === TRUE) {
            echo "Login details registered successfully";
        } else {
            echo "Error registering login details: " . $conn->error;
        }

        // Close database connection
        $conn->close();
    } else {
        echo "User ID is missing or invalid.";
    }
} else {
    echo "Invalid request method.";
}
?>
