<?php
// Check if course_id is provided via GET parameter
if (isset($_GET['course_id'])) {
    $course_id = $_GET['course_id'];

    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'std_mngmnt_sys');

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare SQL statement to delete course
    $sql = "DELETE FROM courses WHERE course_id = '$course_id'";

    // Execute SQL query
    if ($conn->query($sql) === TRUE) {
        echo "Course deleted successfully";
    } else {
        echo "Error deleting course: " . $conn->error;
    }

    // Close database connection
    $conn->close();
} else {
    echo "Course ID is missing.";
}
?>
