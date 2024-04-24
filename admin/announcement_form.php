<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Announcement</title>
    <link rel="stylesheet" href="add_std.css"> <!-- Include your custom CSS file -->
</head>
<body>
    <section class="CONTENT">
        <div class="containerrr">
            <header>Add Announcement</header>

            <form action="add_announcement.php" method="post" class="form">
                <div class="details">
                    <span class="title">Announcement Details</span>

                    <div class="fields">
                        <div class="input-fields">
                            <label>Title</label>
                            <input type="text" name="title" required>
                        </div>

                        <div class="input-fields">
                            <label>Content</label>
                            <textarea name="content" rows="4" required></textarea>
                        </div>
                    </div>

                    <button type="submit" class="submitBtn">
                        <span class="btnText">Submit</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                </div>
            </form>
        </div>
    </section>

    <script src="reg.js"></script> <!-- Include any necessary JavaScript file -->
</body>
</html>
