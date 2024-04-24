<?php
// Check if student ID is provided
if(isset($_GET['student_id']) && !empty($_GET['student_id'])) {
    // Database connection
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

    // Delete student based on ID
    $student_id = $_GET['student_id'];
    $sql = "DELETE FROM students WHERE student_id = $student_id";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
        header("location:home.php#edit_students-content");
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
} else {
    echo "Student ID is missing.";
}
?>
