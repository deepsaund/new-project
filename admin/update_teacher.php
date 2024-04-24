<?php
// Check if form data is submitted using POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all required fields are provided
    if (
        isset($_POST['faculty_id']) && !empty($_POST['faculty_id']) &&
        isset($_POST['name']) && !empty($_POST['name']) &&
        isset($_POST['email']) && !empty($_POST['email']) &&
        isset($_POST['department_id']) && !empty($_POST['department_id']) &&
        isset($_POST['hire_date']) && !empty($_POST['hire_date'])
    ) {
        // Database connection parameters
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "std_mngmnt_sys";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Sanitize and validate inputs
        $faculty_id = $_POST['faculty_id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $department_id = $_POST['department_id'];
        $hire_date = $_POST['hire_date'];

        // Prepare SQL statement to update teacher record
        $sql = "UPDATE faculty SET name='$name', email='$email', department_id='$department_id', hire_date='$hire_date' WHERE faculty_id='$faculty_id'";

        // Execute SQL query
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
            // Redirect to manage_teacher.php after successful update
            header("Location: home.php#edit_teachers-content");
            exit;
        } else {
            echo "Error updating record: " . $conn->error;
        }

        // Close database connection
        $conn->close();
    } else {
        echo "One or more fields are missing.";
    }
} else {
    echo "Invalid request method.";
}
?>
