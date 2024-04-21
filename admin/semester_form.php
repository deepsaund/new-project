<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Semester</title>
    <link rel="stylesheet" href="add_std.css"> <!-- Include your custom CSS file -->
</head>
<body>
    <section class="CONTENT">
        <div class="containerrr">
            <header>Add Semester</header>

            <form action="add_semester.php" method="post" class="form">
                <div class="details">
                    <span class="title">Semester Details</span>

                    <div class="fields">
                        <div class="input-fields">
                            <label>Semester ID</label>
                            <input type="text" name="semester_id" required>
                        </div>

                        <div class="input-fields">
                            <label>Semester Name</label>
                            <input type="text" name="semester_name" required>
                        </div>

                        <div class="input-fields">
                            <label>Start Date</label>
                            <input type="date" name="start_date" required>
                        </div>

                        <div class="input-fields">
                            <label>End Date</label>
                            <input type="date" name="end_date" required>
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
