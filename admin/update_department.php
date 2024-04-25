<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Department</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* Global Styles */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }

        /* .container {
            position: relative;
            border-radius: 6px;
            padding: 20px;
            margin: 0 auto;
            background-color: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(5px);
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
        } */

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        p {
            text-align: center;
            margin-top: 20px;
            font-weight: bold;
        }

        a {
            display: inline-block;
            margin-top: 20px;
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
        <h2>Update Department</h2>

        <?php
        // Database connection
        $conn = new mysqli('localhost', 'root', '', 'std_mngmnt_sys');

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Check if form data is submitted using POST method
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Retrieve and sanitize form data
            $department_id = $_POST['department_id'];
            $department_name = $_POST['department_name'];
            $description = $_POST['description'];

            // Prepare and execute SQL query to update department record
            $sql = "UPDATE departments SET department_name='$department_name', description='$description' WHERE department_id='$department_id'";

            if ($conn->query($sql) === TRUE) {
                echo '<p>Department updated successfully.</p>';
                echo '<a href="home.php#edit_departments-content">Back to Manage Departments</a>';
            } else {
                echo '<p>Error updating department: ' . $conn->error . '</p>';
            }
        } else {
            echo '<p>Invalid request method.</p>';
        }

        // Close the database connection
        $conn->close();
        ?>
    </div>
</body>
</html>
