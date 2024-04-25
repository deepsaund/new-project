<?php
// Check if form data is submitted using POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if course_id is provided in the POST data
    if (isset($_POST['course_id']) && !empty($_POST['course_id'])) {
        // Retrieve form data
        $course_id = $_POST['course_id'];
        $course_name = $_POST['course_name'];
        $description = $_POST['description'];
        $course_code = $_POST['course_code'];
        $instructor_id = $_POST['instructor_id'];
        $department_id = $_POST['department_id'];
        $semester_id = $_POST['semester_id']; // Assuming you select a semester for the course

        // Database connection
        $conn = new mysqli('localhost', 'root', '', 'std_mngmnt_sys');

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare SQL statement to update course record
        $sql = "UPDATE courses SET 
                course_name='$course_name', 
                description='$description', 
                course_code='$course_code', 
                instructor_id='$instructor_id', 
                department_id='$department_id', 
                semester_id='$semester_id' 
                WHERE course_id='$course_id'";

        // Execute SQL query
        if ($conn->query($sql) === TRUE) {
            echo "Course updated successfully";
            // Redirect to manage_courses.php after successful update
            header("Location: manage_courses.php");
            exit;
        } else {
            echo "Error updating course: " . $conn->error;
        }

        // Close database connection
        $conn->close();
    } else {
        echo "Course ID is missing or invalid.";
    }
} else {
    echo "Invalid request method.";
}
?>
