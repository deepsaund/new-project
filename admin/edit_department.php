<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Department</title>
    
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

        .container {
            position: relative;
            border-radius: 6px;
            padding: 20px;
            margin: 0 auto;
            background-color: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(5px);
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
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
        textarea {
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
        <h2>Edit Department</h2>

        <?php
        // Database connection
        $conn = new mysqli('localhost', 'root', '', 'std_mngmnt_sys');

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Check if department_id is provided via GET method
        if (isset($_GET['department_id'])) {
            $department_id = $_GET['department_id'];

            // Fetch department details from the database
            $sql = "SELECT * FROM departments WHERE department_id = $department_id";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $department_name = $row['department_name'];
                $description = $row['description'];

                // Display edit form
                echo '<form action="update_department.php" method="post">';
                echo '<input type="hidden" name="department_id" value="' . $department_id . '">';
                echo '<label for="department_name">Department Name:</label>';
                echo '<input type="text" id="department_name" name="department_name" value="' . htmlspecialchars($department_name) . '" required><br>';
                echo '<label for="description">Description:</label>';
                echo '<textarea id="description" name="description" required>' . htmlspecialchars($description) . '</textarea><br>';
                echo '<input type="submit" value="Update Department">';
                echo '</form>';
            } else {
                echo "Department not found.";
            }
        } else {
            echo "Department ID not provided.";
        }

        // Close the database connection
        $conn->close();
        ?>
    </div>
</body>
</html>

