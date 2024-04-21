<?php
// add_faculty.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $faculty_name = $_POST['faculty_name'];
    $faculty_email = $_POST['faculty_email'];
    $department_id = $_POST['department_id'];
    // $description = $_POST['description'];
    
    // Database connection
    $conn = new mysqli("localhost", "root", "", "std_mngmnt_sys");
    
    // Insert faculty
    $sql = "INSERT INTO faculty (name, department_id, email) 
            VALUES ('$faculty_name', '$department_id', ' $faculty_email')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Faculty added successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
}
?>
