<!-- announcement_form.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Announcement</title>
</head>
<body>
    <h2>Add Announcement</h2>
    <form action="add_announcement.php" method="post">
        Title: <input type="text" name="title" required><br><br>
        Content: <textarea name="content" rows="4" required></textarea><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
