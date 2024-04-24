<?php
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

// Initialize variables
$studentId = null;
$name = "";
$email = "";
$dateOfBirth = "";
$gender = "";
$contact = "";

// Check if 'id' parameter is provided in the query string
if (isset($_GET['student_id']) && is_numeric($_GET['student_id'])) {
    $studentId = $_GET['student_id'];

    // Fetch student details from the database
    $sql = "SELECT * FROM students WHERE student_id = $studentId";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        // Fetch student data
        $row = $result->fetch_assoc();
        $name = $row['f_name'];
        $email = $row['email'];
        $dateOfBirth = $row['date_of_birth'];
        $gender = $row['gender'];
        $contact = $row['contact'];
    } else {
        echo "No student found with ID: " . $studentId;
        exit; // Stop further execution
    }
} else {
    echo "Invalid student ID.";
    exit; // Stop further execution
}

// Close database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #555;
        }
        input[type="text"],
        input[type="email"],
        input[type="date"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        select {
            height: 40px;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Edit Student</h2>
        <form action="update_student.php" method="post">
            <input type="hidden" name="student_id" value="<?php echo htmlspecialchars($studentId); ?>">
            
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($name); ?>" required><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>" required><br>

            <label for="dateOfBirth">Date of Birth:</label>
            <input type="date" id="dateOfBirth" name="dateOfBirth" value="<?php echo htmlspecialchars($dateOfBirth); ?>" required><br>

            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="Male" <?php echo ($gender === 'Male') ? 'selected' : ''; ?>>Male</option>
                <option value="Female" <?php echo ($gender === 'Female') ? 'selected' : ''; ?>>Female</option>
                <option value="Other" <?php echo ($gender === 'Other') ? 'selected' : ''; ?>>Other</option>
            </select><br>

            <label for="contact">Contact:</label>
            <input type="text" id="contact" name="contact" value="<?php echo htmlspecialchars($contact); ?>" required><br>

            <input type="submit" value="Update Student">
        </form>
    </div>
</body>
</html>
