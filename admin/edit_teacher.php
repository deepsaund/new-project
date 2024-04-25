<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Teacher</title>
    <style>
        /* CSS styles for the form */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        /* .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        } */
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
        input[type="number"],
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
        <h2>Edit Teacher</h2>

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
        $faculty_id = null;
        $name = "";
        $email = "";
        $department_id = "";
        $hire_date = "";

        // Check if 'faculty_id' parameter is provided in the query string and is numeric
        if (isset($_GET['faculty_id']) && is_numeric($_GET['faculty_id'])) {
            $faculty_id = $_GET['faculty_id'];

            // Fetch teacher details from the database
            $sql = "SELECT * FROM faculty WHERE faculty_id = $faculty_id";
            $result = $conn->query($sql);

            if ($result && $result->num_rows > 0) {
                // Fetch teacher data
                $row = $result->fetch_assoc();
                $name = $row['name'];
                $email = $row['email'];
                $department_id = $row['department_id'];
                $hire_date = $row['hire_date'];

                // Display edit form
                echo '<form action="update_teacher.php" method="post">';
                echo '<input type="hidden" name="faculty_id" value="' . htmlspecialchars($faculty_id) . '">';
                
                echo '<label for="name">Name:</label>';
                echo '<input type="text" id="name" name="name" value="' . htmlspecialchars($name) . '" required><br>';

                echo '<label for="email">Email:</label>';
                echo '<input type="email" id="email" name="email" value="' . htmlspecialchars($email) . '" required><br>';

                echo '<label for="department_id">Department ID:</label>';
                echo '<input type="number" id="department_id" name="department_id" value="' . htmlspecialchars($department_id) . '" required><br>';

                echo '<label for="hire_date">Hire Date:</label>';
                echo '<input type="date" id="hire_date" name="hire_date" value="' . htmlspecialchars($hire_date) . '" required><br>';

                echo '<input type="submit" value="Update Teacher">';
                echo '</form>';
            } else {
                echo "No teacher found with ID: " . $faculty_id;
            }
        } else {
            echo "Invalid faculty ID.";
        }

        // Close database connection
        $conn->close();
        ?>

    </div>
</body>
</html>
