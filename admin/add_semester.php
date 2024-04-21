<?php
// add_semester.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $semester_id = $_POST['semester_id'];
    $semester_name = $_POST['semester_name'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    
    // Database connection
    $conn = new mysqli("localhost", "root", "", "std_mngmnt_sys");
    
    // Insert semester
    $sql = "INSERT INTO semesters (semester_id, semester_name, start_date, end_date) 
            VALUES ('$semester_id', '$semester_name', '$start_date', '$end_date')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Semester added successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
}
?>
