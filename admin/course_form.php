<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Course</title>
    <link rel="stylesheet" href="add_std.css"> 
</head>
<body>
    <!-- <section class="CONTENT"> -->
        <div class="containerr">
            <header>Add Course</header>

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" >
                <div class="details">
                    <span class="title">Course Details</span>

                    <div class="fields">
                        <div class="input-fields">
                            <label>Course Name</label>
                            <input type="text" name="course_name" required>
                        </div>

                        <div class="input-fields">
                            <label>Description</label>
                            <textarea name="description" rows="4" required></textarea>
                        </div>

                        <div class="input-fields">
                            <label>Course Code</label>
                            <input type="number" name="course_code" required>
                        </div>

                        <div class="input-fields">
                            <label>Instructor</label>
                            <select name="faculty_id" required>
                                <option value="">Select Instructor</option>
                                <?php
                                // Database connection parameters
                                $servername = "localhost";
                                $username = "root";
                                $password = "";
                                $dbname = "std_mngmnt_sys";

                                // Create connection
                                $conn = new mysqli($servername, $username, $password, $dbname);

                                // Check connection
                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                }

                                // Fetch instructors from the database
                                $sql = "SELECT faculty_id, name FROM faculty";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<option value='" . $row['faculty_id'] . "'>" . $row['name'] . "</option>";
                                    }
                                }

                                // Close database connection
                                $conn->close();
                                ?>
                            </select>
                        </div>

                        <div class="input-fields">
                            <label>Department</label>
                            <select name="department_id" required>
                                <option value="">Select Department</option>
                                <?php
                                // Re-establish database connection
                                $conn = new mysqli($servername, $username, $password, $dbname);

                                // Fetch departments from the database
                                $sql = "SELECT department_id, department_name FROM departments";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<option value='" . $row['department_id'] . "'>" . $row['department_name'] . "</option>";
                                    }
                                }

                                // Close database connection
                                $conn->close();
                                ?>
                            </select>
                        </div>

                        <div class="input-fields">
                            <label>Semester</label>
                            <select name="semester_id" required>
                                <option value="">Select Semester</option>
                                <?php
                                // Re-establish database connection
                                $conn = new mysqli($servername, $username, $password, $dbname);

                                // Fetch semesters from the database
                                $sql = "SELECT semester_id, semester_name FROM semesters";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<option value='" . $row['semester_id'] . "'>" . $row['semester_name'] . "</option>";
                                    }
                                }

                                // Close database connection
                                $conn->close();
                                ?>
                            </select>
                        </div>
                    </div>

                    <button type="submit" class="submitBtn">
                        <span class="btnText">Submit</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                </div>
            </form>
        </div>
    <!-- </section> -->
</body>
</html>

<?php
// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $course_name = $_POST['course_name'];
    $description = $_POST['description'];
    $course_code = $_POST['course_code'];
    $faculty_id = $_POST['faculty_id'];
    $department_id = $_POST['department_id'];
    $semester_id = $_POST['semester_id'];

    // Perform database insertion
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO courses (course_name, description, course_code, instructor_id, department_id, semester_id)
            VALUES ('$course_name', '$description', '$course_code', '$faculty_id', '$department_id', '$semester_id')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Course added successfully');</script>";
    } else {
        echo "<script>alert('Error adding course: " . $conn->error . "');</script>";
    }

    $conn->close();
}
?>
    