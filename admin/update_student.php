<?php
// Check if form data is submitted using POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all required fields are provided
    if (
        isset($_POST['student_id']) && !empty($_POST['student_id']) &&
        isset($_POST['name']) && !empty($_POST['name']) &&
        isset($_POST['email']) && !empty($_POST['email']) &&
        isset($_POST['dateOfBirth']) && !empty($_POST['dateOfBirth']) &&
        isset($_POST['gender']) && !empty($_POST['gender']) &&
        isset($_POST['contact']) && !empty($_POST['contact'])
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
        $studentId = $_POST['student_id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $dateOfBirth = $_POST['dateOfBirth'];
        $gender = $_POST['gender'];
        $contact = $_POST['contact'];

        // Prepare SQL statement to update student record
        $sql = "UPDATE students SET f_name='$name', email='$email', date_of_birth='$dateOfBirth', gender='$gender', contact='$contact' WHERE student_id='$studentId'";

        // Execute SQL query
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
            // Redirect to manage_std.php after successful update
            header("Location: home.php#edit_students-content");
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
