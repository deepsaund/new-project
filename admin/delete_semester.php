<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Semester</title>
    <style>
        /* CSS styles for the form */
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
        p {
            margin-bottom: 20px;
            color: #333;
        }
        a {
            color: #007bff;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Delete Semester</h2>

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

        // Check if semester_id is provided and valid
        if (isset($_GET['semester_id']) && is_numeric($_GET['semester_id'])) {
            $semester_id = $_GET['semester_id'];

            // Prepare SQL statement to delete semester record
            $sql = "DELETE FROM semesters WHERE semester_id = $semester_id";

            // Execute SQL query
            if ($conn->query($sql) === TRUE) {
                echo '<p>Semester deleted successfully.</p>';
                echo '<p><a href="home.php#edit_semester-content">Back to Semester List</a></p>';
            } else {
                echo "Error deleting semester: " . $conn->error;
            }
        } else {
            echo "Invalid semester ID.";
        }

        // Close database connection
        $conn->close();
        ?>

    </div>
</body>
</html>
