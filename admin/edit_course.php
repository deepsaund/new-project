<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Course</title>
    <link rel="stylesheet" href="add_std.css"> <!-- Include your custom CSS file -->
</head>
<body>
    <section class="CONTENT">
        <div class="containerrr">
            <header>Edit Course</header>

            <?php
            // Database connection
            $conn = new mysqli('localhost', 'root', '', 'std_mngmnt_sys');

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Check if course_id is provided via GET parameter
            if (isset($_GET['course_id'])) {
                $course_id = $_GET['course_id'];

                // Retrieve course data from the database
                $sql = "SELECT * FROM courses WHERE course_id = '$course_id'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();

                    // Fetch necessary course data
                    $course_name = $row['course_name'];
                    $description = $row['description'];
                    $course_code = $row['course_code'];
                    $instructor_id = $row['instructor_id'];
                    $department_id = $row['department_id'];
                    $semester_id = $row['semester_id'];
                    ?>
                    
                    <form action="update_course.php" method="post" class="form">
                        <input type="hidden" name="course_id" value="<?php echo $course_id; ?>">

                        <div class="details">
                            <span class="title">Course Details</span>

                            <div class="fields">
                                <div class="input-fields">
                                    <label>Course Name</label>
                                    <input type="text" name="course_name" value="<?php echo htmlspecialchars($course_name); ?>" required>
                                </div>

                                <div class="input-fields">
                                    <label>Description</label>
                                    <textarea name="description" rows="4" required><?php echo htmlspecialchars($description); ?></textarea>
                                </div>

                                <div class="input-fields">
                                    <label>Course Code</label>
                                    <input type="text" name="course_code" value="<?php echo htmlspecialchars($course_code); ?>" required>
                                </div>

                                <div class="input-fields">
                                    <label>Instructor</label>
                                    <select name="instructor_id" required>
                                        <option value="">Select Instructor</option>
                                        <?php
                                        // Retrieve instructors from database
                                        $sql_instructors = "SELECT faculty_id, name FROM faculty";
                                        $result_instructors = $conn->query($sql_instructors);

                                        if ($result_instructors->num_rows > 0) {
                                            while ($row_instructor = $result_instructors->fetch_assoc()) {
                                                $selected = ($instructor_id == $row_instructor['faculty_id']) ? 'selected' : '';
                                                echo "<option value='{$row_instructor['faculty_id']}' $selected>{$row_instructor['name']}</option>";
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="input-fields">
                                    <label>Department</label>
                                    <select name="department_id" required>
                                        <option value="">Select Department</option>
                                        <?php
                                        // Retrieve departments from database
                                        $sql_departments = "SELECT department_id, department_name FROM departments";
                                        $result_departments = $conn->query($sql_departments);

                                        if ($result_departments->num_rows > 0) {
                                            while ($row_department = $result_departments->fetch_assoc()) {
                                                $selected = ($department_id == $row_department['department_id']) ? 'selected' : '';
                                                echo "<option value='{$row_department['department_id']}' $selected>{$row_department['department_name']}</option>";
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="input-fields">
                                    <label>Semester</label>
                                    <select name="semester_id" required>
                                        <option value="">Select Semester</option>
                                        <?php
                                        // Retrieve semesters from database
                                        $sql_semesters = "SELECT semester_id, semester_name FROM semesters";
                                        $result_semesters = $conn->query($sql_semesters);

                                        if ($result_semesters->num_rows > 0) {
                                            while ($row_semester = $result_semesters->fetch_assoc()) {
                                                $selected = ($semester_id == $row_semester['semester_id']) ? 'selected' : '';
                                                echo "<option value='{$row_semester['semester_id']}' $selected>{$row_semester['semester_name']}</option>";
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <button type="submit" class="submitBtn">
                                <span class="btnText">Update Course</span>
                                <i class="uil uil-navigator"></i>
                            </button>
                        </div>
                    </form>

                    <?php
                } else {
                    echo "Course not found.";
                }
            } else {
                echo "Course ID is missing.";
            }

            // Close the database connection
            $conn->close();
            ?>
        </div>
    </section>

    <script src="reg.js"></script> <!-- Include any necessary JavaScript file -->
</body>
</html>
