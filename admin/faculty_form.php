<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Faculty</title>
    <!-- Include external CSS files for styling -->
    <link rel="stylesheet" href="add_std.css"> <!-- Assuming this CSS file is used for styling -->
</head>

<body>
    <section class="CONTENT">
        <div class="containerrr">
            <header>Add Faculty</header>

            <form action="add_faculty.php" enctype="multipart/form-data" method="post">

               
                    <div class="details personal">
                        
                        <div class="fields">
                            <!-- Faculty Name -->
                            <div class="input-fields">
                                <label>Faculty Name</label>
                                <input type="text" name="faculty_name" placeholder="Enter faculty name" required>
                            </div>
                            <!-- Faculty Email -->
                            <div class="input-fields">
                                <label>Email</label>
                                <input type="email" name="faculty_email" placeholder="Enter faculty email" required>
                            </div>
                            <!-- Department ID (Dropdown) -->
                            <div class="input-fields">
                                <label>Department</label>
                                <select name="department_id" required>
                                    <option value="">Select department</option>
                                    <!-- PHP Code to fetch department IDs and names -->
                                    <?php
                            // Establish database connection
                            $conn = new mysqli("localhost", "root", "", "std_mngmnt_sys");
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            // Fetch department IDs and names
                            $sql = "SELECT department_id, department_name FROM departments";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "<option value='" . $row['department_id'] . "'>" . $row['department_name'] . "</option>";
                                }
                            } else {
                                echo "<option value=''>No departments found</option>";
                            }

                            $conn->close();
                            ?>
                                </select>
                            </div>
                            <!-- Description -->
                            <div class="input-fields">
                                <label>Description</label>
                                <textarea name="description" rows="4" placeholder="Enter description"
                                    required></textarea>
                            </div>
                        </div>
                    </div>
                
                <!-- Submit Button -->
                <button type="submit" class="submitBtn">
                    <span class="btnText">Submit</span>
                    <i class="uil uil-navigator"></i>
                </button>
            </form>
        </div> 
        
    </section>
    <!-- Include JavaScript file for form functionality -->
    <script src="reg.js"></script>
</body>

</html>