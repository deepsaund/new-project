<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Courses</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* CSS styles for the table and layout */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }

        /* .container {
            position: relative;
            border-radius: 6px;
            padding: 20px;
            margin: 0 20px;
            background-color: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(5px);
            box-shadow: 0 5px 10px rgba(0,0,0,0.1);
        } */

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table th,
        table td {
            padding: 0 20px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        table th {
            background-color: #007bff;
            color: #fff;
        }

        table tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .action-links a {
            display: inline-block;
            margin-right: 10px;
            color: #007bff;
            text-decoration: none;
        }

        .action-links a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="containerr">
        <h2>Manage Courses</h2>

        <!-- Display Courses Table -->
        <?php
        // Database connection
        $conn = new mysqli('localhost', 'root', '', 'std_mngmnt_sys');

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Fetch course data from the database
        $sql = "SELECT * FROM courses";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo '<table>';
            echo '<thead>
                    <tr>
                        <th>Course ID</th>
                        <th>Course Name</th>
                        <th>Description</th>
                        <th>Course Code</th>
                        <th>Instructor ID</th>
                        <th>Department ID</th>
                        <th>Semester ID</th>
                        <th>Action</th>
                    </tr>
                  </thead>';
            echo '<tbody>';
            while ($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td>' . $row["course_id"] . '</td>';
                echo '<td>' . $row["course_name"] . '</td>';
                echo '<td>' . $row["description"] . '</td>';
                echo '<td>' . $row["course_code"] . '</td>';
                echo '<td>' . $row["instructor_id"] . '</td>';
                echo '<td>' . $row["department_id"] . '</td>';
                echo '<td>' . $row["semester_id"] . '</td>';
                echo '<td class="action-links">
                        <a href="edit_course.php?course_id=' . $row["course_id"] . '"><i class="fas fa-edit"></i></a>
                        <a href="delete_course.php?course_id=' . $row["course_id"] . '" onclick="return confirm(\'Are you sure you want to delete this course?\')"><i class="fas fa-trash-alt"></i></a>
                      </td>';
                echo '</tr>';
            }
            echo '</tbody>';
            echo '</table>';
        } else {
            echo '<p>No courses found.</p>';
        }

        // Close the database connection
        $conn->close();
        ?>
    </div>
</body>
</html>
