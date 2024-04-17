<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <div class="center">
            <h2>REGISTER STUDENTS</h2>
            <form action="process_student_registration.php" method="post" enctype="multipart/form-data">
                <div class="page1">
                    <fieldset>
                    <legend>Basic Information</legend>

                    <div class="form-group">
                        <label for="first_name">First Name:</label>
                        <input type="text" id="first_name" name="first_name" required><br>
                    </div>
    
                    <div class="form-group">
                        <label for="last_name">Last Name:</label>
                        <input type="text" id="last_name" name="last_name" required><br>
                    </div>
                    <div class="form-group">
                        <label for="dob">Date of Birth:</label>
                        <input type="date" id="dob" name="date_of_birth" required><br>
                    </div>
    
                    <div class="form-group">
                        <label for="gender">Gender:</label>
                        <select id="gender" name="gender" required>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select><br>
                    </div>
    
                    <div class="form-group">
                        <label for="address">Address:</label>
                        <input type="text" id="address" name="address" required><br>
                    </div>
    
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required><br>
                    </div>
    
                    <div class="form-group">
                        <label for="phone">Phone Number:</label>
                        <input type="text" id="phone" name="phone_number" required><br>
                    </div>
    
                    <div class="form-group">
                        <label for="profile_pic">Profile Picture:</label>
                        <input type="file" id="profile_pic" name="profile_picture" accept="image/*"><br>
                    </div>
    
                    <button id="next_form1">Next</button>
                </fieldset>
                </div>
                <!-- Academic Information -->
                <div class="page2">
                    <fieldset id="p2">
                        <legend>Academic Information</legend>
                        <div class="form-group">
                            <label for="student_id">Student ID:</label>
                            <input type="text" id="student_id" name="student_id" required>
                        </div>
                        <div class="form-group">
                            <label for="enrollment_date">Enrollment Date:</label>
                            <input type="date" id="enrollment_date" name="enrollment_date" required>
                        </div>
                        <div class="form-group">
                            <label for="program">Academic Program/Major:</label>
                            <select id="program" name="academic_program" required>
                                <option value="IT">IT</option>
                                <option value="CSE">CSE</option>
                                <option value="ECE">ECE</option>
                                <option value="EE">EE</option>
                                <option value="AE">AE</option>
                            </select>

                        </div>
                    
                        <div class="form-group">
                            <label for="semester">Current Semester:</label>
                            <select  id="semester" name="current_semester" required>
                                
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                            </select>
                        </div>   
                            <button id="back_form1">Back</button>
                            <button id="next_form2">Next</button>
                    </fieldset>
                   
                </div>
                <div class="page3">
                    <fieldset>
                        <legend>Contact Information</legend>
                        <div class="form-group">
                            <label for="father_name">Father Name:</label>
                            <input type="text" id="father_name" name="father_name"><br>
                        </div>  
                        <div class="form-group">
                            <label for="mother_name">Mother Name:</label>
                            <input type="text" id="mother_name" name="mother_name"><br>
                        </div>    
                        <div class="form-group">
                            <label for="parent_phone">Parent/Guardian Phone Number:</label>
                            <input type="number" id="parent_phone" name="parent_phone"><br>
                        </div>    
                    </fieldset>
                        <fieldset class="p3">
                            <legend>Acadmic History</legend>
                            <div class="form-group">
                                <label for="education_level">Education Level:</label>
                                <select id="education_level" name="education_level" required>
                                    <option value="">Select Education Level</option>
                                    <option value="10th">10th Grade</option>
                                    <option value="12th">12th Grade</option>
                                    <option value="diploma">Diploma</option>
                                    <option value="other">Other</option>
                                </select><br>
                            </div>    
                                
                            <div class="form-group">
                                <label for="institute_name">Institute/School Name:</label>
                                <input type="text" id="institute_name" name="institute_name" required><br>
                            </div>    
                            <div class="form-group">
                                <label for="course_name">Course/Degree:</label>
                                <input type="text" id="course_name" name="course_name" required><br>
                            </div>    
                            <div class="form-group">
                                <label for="completion_year">Year of Completion:</label>
                                <input type="text" id="completion_year" name="completion_year" required><br>
                            </div>    


                            <button id="back_form2">Back</button>
                            <button id="next_form3">Next</button>

                    </fieldset>
                </div>
                <!-- Add academic fields here -->

                <!-- Additional Information -->
                <!-- Add additional fields here -->
        
            </form>

        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>