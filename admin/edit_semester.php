<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Semester</title>
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
        form {
            margin-top: 20px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #555;
        }
        input[type="text"],
        input[type="date"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
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
        <h2>Edit Semester</h2>

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
        $semester_id = null;
        $semester_name = "";
        $start_date = "";
        $end_date = "";

        // Check if 'semester_id' parameter is provided in the query string and is numeric
        if (isset($_GET['semester_id']) && is_numeric($_GET['semester_id'])) {
            $semester_id = $_GET['semester_id'];

            // Fetch semester details from the database
            $sql = "SELECT * FROM semesters WHERE semester_id = $semester_id";
            $result = $conn->query($sql);

            if ($result && $result->num_rows > 0) {
                // Fetch semester data
                $row = $result->fetch_assoc();
                $semester_name = $row['semester_name'];
                $start_date = $row['start_date'];
                $end_date = $row['end_date'];

                // Display edit form
                echo '<form action="update_semester.php" method="post">';
                echo '<input type="hidden" name="semester_id" value="' . htmlspecialchars($semester_id) . '">';

                echo '<label for="semester_name">Semester Name:</label>';
                echo '<input type="text" id="semester_name" name="semester_name" value="' . htmlspecialchars($semester_name) . '" required><br>';

                echo '<label for="start_date">Start Date:</label>';
                echo '<input type="date" id="start_date" name="start_date" value="' . htmlspecialchars($start_date) . '" required><br>';

                echo '<label for="end_date">End Date:</label>';
                echo '<input type="date" id="end_date" name="end_date" value="' . htmlspecialchars($end_date) . '" required><br>';

                echo '<input type="submit" value="Update Semester">';
                echo '</form>';
            } else {
                echo "No semester found with ID: " . $semester_id;
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
