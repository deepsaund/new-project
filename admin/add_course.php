<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $course_name = $_POST['course_name'];
    $description = $_POST['description'];
    $course_code = $_POST['course_code'];
    $faculty_id = $_POST['faculty_id'];
    $department_id = $_POST['department_id'];
    $semester_id = $_POST['semester_id']; // Ensure this matches the name attribute in course_form.php

    // Database connection
    $conn = new mysqli("localhost", "root", "", "std_mngmnt_sys");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute SQL query to insert new course
    $sql = "INSERT INTO courses (course_name, description, course_code, instructor_id, department_id, semester_id) 
            VALUES ('$course_name', '$description', '$course_code', '$faculty_id', '$department_id', '$semester_id')";

    if ($conn->query($sql) === TRUE) {
        echo "Course added successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    echo "Invalid request.";
}
?>
