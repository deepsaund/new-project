<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Students</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* ===== Google Font Import - Poppins ===== */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');
*{
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
.containerrr{
    /* width: 99%; */
    position: relative;
    border-radius: 6px;
    padding: 20px;
    margin:0 20px;
    background-color: rgba(255, 255, 255, 0.95);
     backdrop-filter:blur(5px);
    
    box-shadow: 0 5px 10px rgba(0,0,0,0.1);
}
.table-container {
    max-width: 100%;
    height: calc(100% - 20px);
    margin-top: 10px;
    background: rgba(255, 255, 255, 0.95);
    overflow-x: auto; /* Horizontal scroll if needed */
    display: flex;
    flex-direction: column;
    align-items: center;
    /* justify-content: center; */
}

table {
   width:100%;/* Fixed width for the table */
    border-collapse: collapse;
    margin-top: 20px;
}

table th,
table td {
    padding: 10px 20px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}


table th {
    background-color: #007bff;
    color: #fff;
}
#title {
    text-align: center;
    width: 100%;
    padding:10px;
    background-color: #ffffff;
    box-shadow: 0 5px 10px rgba(0,0,0,0.05);
    color: #333;
}
hr{
    display: none;
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

/* Default styles for the table */
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

/* Additional styles for larger screens (e.g., desktops) */
@media (min-width: 768px) {
    table {
        width: 600px; /* Fixed width for larger screens */
    }
    .table-container{
        height: 100vh;
        width: 100%;
    }
}

    </style>
</head>
<body>
   
    <?php
    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'std_mngmnt_sys');

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch user data from the database
    $sql = "SELECT * FROM students";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo '<table class="containerr">';
        echo '<thead>
            <tr>
                    <th>Student ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Date of Birth</th>
                    <th>Gender</th>
                    <th>Contact</th>
                    <th>Action</th>
                </tr>
              </thead>';
        echo '<tbody>';
        while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . $row["student_id"] . '</td>';
            echo '<td>' . $row["f_name"] . '</td>';
            echo '<td>' . $row["email"] . '</td>';
            echo '<td>' . $row["date_of_birth"] . '</td>';
            echo '<td>' . $row["gender"] . '</td>';
            echo '<td>' . $row["contact"] . '</td>';
            echo '<td class="action-links">
                    <a href="edit_std.php?student_id=' . $row["student_id"] . '"><i class="fa-regular fa-pen-to-square fa-sm"></i></a>
                    <a href="delete_std.php?student_id=' . $row["student_id"] . '" onclick="return confirm(\'Are you sure you want to delete this student?\')"><i class="fa-solid fa-trash fa-sm"></i></a>
                  </td>';
            echo '</tr>';
        }
        echo '</tbody>';
        echo '</table>';
    } else {
        echo '<p>No students found.</p>';
    }
    

    // Close the database connection
    $conn->close();
    ?>
</body>
</html>