<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Announcement</title>
</head>
<body>
    <?php
    // Check if announcement_id is provided via GET parameter
    if (isset($_GET['announcement_id'])) {
        $announcement_id = $_GET['announcement_id'];

        // Database connection
        $conn = new mysqli('localhost', 'root', '', 'std_mngmnt_sys');

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare SQL statement to delete announcement
        $sql = "DELETE FROM announcements WHERE announcement_id = '$announcement_id'";

        // Execute SQL query
        if ($conn->query($sql) === TRUE) {
            echo "Announcement deleted successfully";
            header('Location: home.php#edit_announcements-content');
            exit;
        } else {
            echo "Error deleting announcement: " . $conn->error;
        }

        // Close database connection
        $conn->close();
    } else {
        echo "Announcement ID is missing.";
    }
    ?>
</body>
</html>
