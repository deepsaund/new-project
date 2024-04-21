<?php
// add_department.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $department_name = $_POST['department_name'];
    $description = $_POST['description'];
    
    // Database connection
    $conn = new mysqli("localhost", "root", "", "std_mngmnt_sys");
    
    // Insert department
    $sql = "INSERT INTO departments (department_name, description) 
            VALUES ('$department_name', '$description')";
    
    if ($conn->query($sql) === TRUE) {
       
    echo "department added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
}
?>
