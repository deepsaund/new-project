<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Department</title>
    <link rel="stylesheet" href="add_std.css"> <!-- Include your custom CSS file -->
</head>
<body>
    <section class="CONTENT">
        <div class="containr containerr">
      
            <header>Add Department</header>

            <form action="add_department.php" method="post" >
                <div class="details">
                    <span class="title">Department Details</span>

                    <div class="fields">
                        <div class="input-fields">
                            <label>Department Name</label>
                            <input type="text" name="department_name" required>
                        </div>

                        <div class="input-fields">
                            <label>Description</label>
                            <textarea name="description" rows="4" required></textarea>
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
