<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Announcement</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        form {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #555;
        }
        input[type="text"],
        input[type="date"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h2>Edit Announcement</h2>

    <?php
    // Check if form data is submitted using POST method
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Check if announcement_id is provided in the POST data
        if (isset($_POST['announcement_id']) && !empty($_POST['announcement_id'])) {
            // Retrieve form data
            $announcement_id = $_POST['announcement_id'];
            $title = $_POST['title'];
            $content = $_POST['content'];
            $posting_date = $_POST['posting_date'];

            // Database connection
            $conn = new mysqli('localhost', 'root', '', 'std_mngmnt_sys');

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Prepare SQL statement to update announcement
            $sql = "UPDATE announcements SET 
                    title = '$title', 
                    content = '$content', 
                    posting_date = '$posting_date' 
                    WHERE announcement_id = '$announcement_id'";

            // Execute SQL query
            if ($conn->query($sql) === TRUE) {
                echo "Announcement updated successfully";
                // Redirect to manage_announcements.php after successful update
                echo "<script>window.location = 'home.php#edit_announcements-content';</script>";
                exit;
            } else {
                echo "Error updating announcement: " . $conn->error;
            }

            // Close database connection
            $conn->close();
        } else {
            echo "Announcement ID is missing or invalid.";
        }
    } else {
        // Display edit form
        if (isset($_GET['announcement_id'])) {
            $announcement_id = $_GET['announcement_id'];

            // Database connection
            $conn = new mysqli('localhost', 'root', '', 'std_mngmnt_sys');

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Fetch announcement details
            $sql = "SELECT * FROM announcements WHERE announcement_id = '$announcement_id'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="hidden" name="announcement_id" value="<?php echo $announcement_id; ?>">
        
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" value="<?php echo $row['title']; ?>" required><br>
        
        <label for="content">Content:</label>
        <textarea id="content" name="content" rows="5" required><?php echo $row['content']; ?></textarea><br>
        
        <label for="posting_date">Posting Date:</label>
        <input type="date" id="posting_date" name="posting_date" value="<?php echo $row['posting_date']; ?>" required><br>
        
        <button type="submit">Update Announcement</button>
    </form>
    <?php
            } else {
                echo "Announcement not found";
            }

            // Close database connection
            $conn->close();
        } else {
            echo "Announcement ID is missing";
        }
    }
    ?>
</body>
</html>
