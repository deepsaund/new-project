<!-- enrollment_form.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Enroll Student</title>
</head>
<body>
    <h2>Enroll Student</h2>
    <form action="add_enrollment.php" method="post">
        Student ID:
        <select name="student_id" required>
            <option value="">Select Student</option>
            <!-- Fetch student IDs from 'students' table -->
            <?php
            $conn = new mysqli("localhost", "root", "", "std_mngmnt_sys");
            $sql = "SELECT student_id, f_name FROM students";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row['student_id'] . "'>" . $row['f_name'] . "</option>";
                }
            }
            $conn->close();
            ?>
        </select><br><br>
        
        Course ID:
        <select name="course_id" required>
            <option value="">Select Course</option>
            <!-- Fetch course IDs from 'courses' table -->
            <?php
            $conn = new mysqli("localhost", "root", "", "std_mngmnt_sys");
            $sql = "SELECT course_id, course_name FROM courses";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row['course_id'] . "'>" . $row['course_name'] . "</option>";
                }
            }
            $conn->close();
            ?>
        </select><br><br>
        
        Enrollment Date: <input type="date" name="enrollment_date" required><br><br>
        
        <input type="submit" value="Enroll Student">
    </form>
</body>
</html>
