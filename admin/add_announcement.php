<?php
// add_announcement.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $content = $_POST['content'];
    
    // Database connection
    $conn = new mysqli("localhost", "root", "", "std_mngmnt_sys");
    
    // Insert announcement
    $sql = "INSERT INTO announcements (title, content) VALUES ('$title', '$content')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Announcement added successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
}
?>
