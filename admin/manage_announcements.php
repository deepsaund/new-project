<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Announcements</title>
    <!-- Include Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        /* Table Styles */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px 20px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #007bff;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        /* Action Links */
        .action-links a {
            color: #007bff;
            text-decoration: none;
            margin-right: 10px;
        }

        .action-links a:hover {
            text-decoration: underline;
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

    // Fetch announcements from the database
    $sql = "SELECT * FROM announcements";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Display announcements in a table
        echo '<table class="containerr">';
        echo '<tr><th>Title</th><th>Content</th><th>Posting Date</th><th>Action</th></tr>';
        while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . $row['title'] . '</td>';
            echo '<td>' . $row['content'] . '</td>';
            echo '<td>' . $row['posting_date'] . '</td>';
            echo '<td class="action-links">';
            // Edit Announcement Link with Font Awesome Icon
            echo '<a href="edit_announcement.php?announcement_id=' . $row["announcement_id"] . '"><i class="fa-regular fa-pen-to-square fa-sm"></i></a>';
            // Delete Announcement Link with Font Awesome Icon and Confirmation
            echo '<a href="delete_announcement.php?announcement_id=' . $row["announcement_id"] . '" onclick="return confirm(\'Are you sure you want to delete this announcement?\')"><i class="fa-solid fa-trash fa-sm"></i></a>';
            echo '</td>';
            echo '</tr>';
        }
        echo '</table>';
    } else {
        echo '<p>No announcements found.</p>';
    }

    // Close database connection
    $conn->close();
    ?>
</body>
</html>
