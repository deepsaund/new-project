<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Course</title>
    <link rel="stylesheet" href="add_std.css"> <!-- Include your custom CSS file -->
</head>
<body>
    <section class="CONTENT">
        <div class="containerr">
            <header>Add Course</header>

            <form action="add_course.php" method="post" class="form">
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
                            <label>Credits</label>
                            <input type="number" name="credits" required>
                        </div>

                        <div class="input-fields">
                            <label>Instructor</label>
                            <select name="faculty_id" required>
                                <option value="">Select Instructor</option>
                                <!-- Populate with instructors fetched from database -->
                                <?php
                                $conn = new mysqli("localhost", "root", "", "std_mngmnt_sys");
                                $sql = "SELECT faculty_id, name FROM faculty";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                                        echo "<option value='" . $row['faculty_id'] . "'>" . $row['name'] . "</option>";
                                    }
                                }
                                $conn->close();
                                ?>
                            </select>
                        </div>

                        <div class="input-fields">
                            <label>Department</label>
                            <select name="department_id" required>
                                <option value="">Select Department</option>
                                <!-- Populate with departments fetched from database -->
                                <?php
                                $conn = new mysqli("localhost", "root", "", "std_mngmnt_sys");
                                $sql = "SELECT department_id, department_name FROM departments";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                                        echo "<option value='" . $row['department_id'] . "'>" . $row['department_name'] . "</option>";
                                    }
                                }
                                $conn->close();
                                ?>
                            </select>
                        </div>

                        <div class="input-fields">
                            <label>Semester</label>
                            <select name="semester" required>
                                <option value="">Select Semester</option>
                                <!-- Populate with semesters fetched from database -->
                                <?php
                                $conn = new mysqli("localhost", "root", "", "std_mngmnt_sys");
                                $sql = "SELECT semester_id, semester_name FROM semesters";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                                        echo "<option value='" . $row['semester_id'] . "'>" . $row['semester_name'] . "</option>";
                                    }
                                }
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
    </section>

    <script src="reg.js"></script> <!-- Include any necessary JavaScript file -->
</body>
</html>
