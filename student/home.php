<?php

session_start();

if (!isset($_SESSION['role']) || $_SESSION['role'] != 'student') {
    header("Location: ../login/login_form.php");
    exit();
}



if(isset($_SESSION['username']))
{
    $username = $_SESSION['username'];

    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'student_management_system');

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

   
    $sql = "SELECT f_name,date_of_birth,email,contact,gender,category,photo,id FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $stmt->bind_result($fname,$date_of_birth,$email,$contact,$gender,$category,$profile_pic,$id_number);
    $stmt->fetch();

    echo "Welcome, " . $profile_pic;

    // Close connections
    $stmt->close();
    $conn->close();
}
else
{
    echo "You need to log in first";
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

    <!-- Fontawesome Link for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <script src="script.js" defer></script>

</head>

<body>
    <div class="container">
        <!----------------------------------------------------------------------------------LEFT SECTION----------------------------------------------------------------------------------->
        <section class="left-side">
            <!----------------------------- LOGO  ----------------------------------------->
            <div class="logo">
                <span class="profile-pic">
                    <img src="<?php echo '../pp/' . $profile_pic; ?>" alt="User Image">




                </span>
                <span class="profile-text">
                    <h4>
                        <?php echo $fname; ?>
                        <h4>
                            <p>User Id:
                                <?php echo $id_number ?>/21
                            </p>
                </span>
            </div>

            <!-----------------------------------------------NAV LINKS---------------------------------------------->
            <div class="links">
                <ul>
                    <!----------------------------- HOME  -------------------------------->

                    <li><a href="#home-content" onclick="show()">
                            <span class="icon">
                                <lord-icon src="https://cdn.lordicon.com/onercatl.json" trigger="morph"
                                    colors="primary:#ffffff" state="morph-home-2" style="width:25px;height:25px">
                                </lord-icon>

                            </span>
                            <span class="text">Home</span>
                        </a></li>

                    <!----------------------------- GENERAL INFO  -------------------------------->
                    <li><a href="#genInfo-content">
                            <span class="icon">
                                <script src="https://cdn.lordicon.com/lordicon-1.1.0.js"></script>
                                <lord-icon src="https://cdn.lordicon.com/lyrrgrsl.json" trigger="hover"
                                    colors="primary:#ffffff" style="width:25px;height:25px">
                                </lord-icon>

                            </span>
                            <span class="text">General Info.</span>
                        </a></li>

                    <!----------------------------- SUBJECTS  -------------------------------->
                    <li><a href="#sub-content">
                            <span class="icon">

                                <script src="https://cdn.lordicon.com/lordicon-1.1.0.js"></script>
                                <lord-icon src="https://cdn.lordicon.com/zyzoecaw.json" trigger="morph"
                                    colors="primary:#ffffff" state="morph-book" style="width:25px;height:25px">
                                </lord-icon>
                            </span>
                            <span class="text">subjects</span>
                        </a></li>
                    <!----------------------------- RESULTS  -------------------------------->
                    <li><a href="#rslt-content">
                            <span class="icon">
                                <lord-icon src="https://cdn.lordicon.com/jtoybaes.json" trigger="hover" stroke="bold"
                                    colors="primary:#ffffff,secondary:#ffffff" style="width:25px;height:25px">
                                </lord-icon>
                            </span>
                            <span class="text">results</span>
                        </a></li>
                    <!----------------------------- LOGOUT  -------------------------------->
                    <li><a href="../logout.php">
                            <span class="icon">

                            </span>
                            <span class="text" id="Logout">Logout</span>
                        </a></li>
                </ul>
            </div>
        </section>
        <!----------------------------------------------------------------------------------MAIN SECTION----------------------------------------------------------------------------------->

        <section class="main">
            <!---------------------------------#HOME-C------------------------------------>
            <section id="home-content" class="main-c">


                <h3>hi there...</h3>
                <h2>Welcome! </h2>
                <h1 class="post" style="font-size: 40px;">Dear
                    <?php echo $fname; ?><span class="typing-text">!</span>
                </h1>
            </section>
            <section id="genInfo-content" class="main-c">


                <form action="../update.php" method="post">
                    <div class="General-details">
                        <!---------------------------------#GEN INFO-C------------------------------------>

                        <span class="title">General Information</span>

                        <div class="fields">
                            <div class="input-field item1">
                                <label>Student Name</label>
                                <input type="text" disabled placeholder="Enter your name" name="std_name"
                                    value="<?php echo $fname; ?>" required>
                            </div>

                            <div class="input-field item2">
                                <label>Date of Birth</label>
                                <input type="date" placeholder="Enter birth date" name="D.O.B" disabled
                                    value="<?php echo $date_of_birth; ?>" required>
                            </div>

                            <div class="input-field item3">
                                <label>Email</label>
                                <input type="text" placeholder="Enter your email" name="email"
                                    value="<?php echo $email ?>" required>
                            </div>

                            <div class="input-field item4">
                                <label>Mobile Number</label>
                                <input type="tel" placeholder="Enter mobile number" name="contact"
                                    value="<?php echo $contact; ?>" required>
                            </div>

                            <div class="input-field item5">
                                <label>Gender</label>
                                <select name="gender" disabled required>
                                    <option disabled value="">Select gender</option>
                                    <option value="male" <?php if ( $gender==="male" ) echo ' selected="selected"' ; ?>
                                        >Male</option>
                                    <option value="female" <?php if ( $gender==="female" ) echo ' selected="selected"' ;
                                        ?>>Female</option>
                                    <option value="others" <?php if ( $gender==="others" ) echo ' selected="selected"' ;
                                        ?>>Others</option>
                                </select>
                            </div>

                            <div class="input-field item6">
                                <label>Category</label>
                                <select disabled required>
                                    <option disabled>Select category</option>
                                    <option value="General" <?php if ( $category==="General" )
                                        echo ' selected="selected"' ; ?>>GENRAL</option>
                                    <option value="SC" <?php if ( $category==="SC" ) echo ' selected="selected"' ; ?>>SC
                                    </option>
                                    <option value="BC" <?php if ( $category==="BC" ) echo ' selected="selected"' ; ?>>BC
                                    </option>
                                    <option value="OBC" <?php if ( $category==="OBC" ) echo ' selected="selected"' ; ?>
                                        >OBC</option>


                                </select>


                            </div>

                            <button id="update_btn" name="update">Update</button>

                        </div>
                    </div>
                </form>
            </section>
            <!---------------------------------#ASSIGNMENT-C------------------------------------>


            <!---------------------------------#SUBJECT-C------------------------------------>

            <section id="sub-content" class="main-c">
                <button class="tablink assignment-tab" onclick="openPage('BOM', this, '#fd746a')"
                    id="defaultOpen">BOM</button>
                <button class="tablink assignment-tab" onclick="openPage('DM', this, '#fd746a')">DM</button>
                <button class="tablink assignment-tab" onclick="openPage('CPI', this, '#fd746a')">CPI</button>
                <button class="tablink assignment-tab" onclick="openPage('WD', this, '#fd746a')">WEB DEV</button>
                <button class="tablink assignment-tab" onclick="openPage('MT', this, '#fd746a')">MT</button>

                <div id="BOM" class="tabcontent">

                    <h3>BOM</h3>
                    <p>Home is where the heart is..</p>

                    <div class="assignment-content">
                        <h4>Assignment 1</h4>
                        <p>Deadline: October 31, 2023</p>
                        <p>Description: Create a simple web page using HTML and CSS.</p>
                    </div>

                    <div class="assignment-content">
                        <h4>Assignment 1</h4>
                        <p>Deadline: October 31, 2023</p>
                        <p>Description: Create a simple web page using HTML and CSS.</p>
                    </div>

                    <div class="assignment-content">
                        <h4>Assignment 1</h4>
                        <p>Deadline: October 31, 2023</p>
                        <p>Description: Create a simple web page using HTML and CSS.</p>
                    </div>
                </div>

                <div id="DM" class="tabcontent">
                    <h3>DIGI.MARKETING</h3>
                    <p>Some news this fine day!</p>

                    <div class="assignment-content">
                        <h4>Assignment 1</h4>
                        <p>Deadline: October 31, 2023</p>
                        <p>Description: Create a simple web page using HTML and CSS.</p>
                    </div>

                    <div class="assignment-content">
                        <h4>Assignment 1</h4>
                        <p>Deadline: October 31, 2023</p>
                        <p>Description: Create a simple web page using HTML and CSS.</p>
                    </div>

                    <div class="assignment-content">
                        <h4>Assignment 1</h4>
                        <p>Deadline: October 31, 2023</p>
                        <p>Description: Create a simple web page using HTML and CSS.</p>
                    </div>
                </div>

                <div id="CPI" class="tabcontent">
                    <h3>COMPUTER PERIPHERALS AND INTERFACE</h3>
                    <p>Get in touch, or swing by for a cup of coffee.</p>
                    <div class="assignment-content">
                        <h4>Assignment 1</h4>
                        <p>Deadline: October 31, 2023</p>
                        <p>Description: Create a simple web page using HTML and CSS.</p>
                    </div>

                    <div class="assignment-content">
                        <h4>Assignment 1</h4>
                        <p>Deadline: October 31, 2023</p>
                        <p>Description: Create a simple web page using HTML and CSS.</p>
                    </div>

                    <div class="assignment-content">
                        <h4>Assignment 1</h4>
                        <p>Deadline: October 31, 2023</p>
                        <p>Description: Create a simple web page using HTML and CSS.</p>

                    </div>
                </div>
                <div id="WD" class="tabcontent">
                    <h3>WD USING PHP</h3>
                    <H5>ASSIGNMENTS</H5>
                    <div class="assignment-content">
                        <h4>Assignment 1</h4>
                        <p>Deadline: October 31, 2023</p>
                        <p>Description: Create a simple web page using HTML and CSS.</p>
                    </div>

                    <div class="assignment-content">
                        <h4>Assignment 1</h4>
                        <p>Deadline: October 31, 2023</p>
                        <p>Description: Create a simple web page using HTML and CSS.</p>
                    </div>

                    <div class="assignment-content">
                        <h4>Assignment 1</h4>
                        <p>Deadline: October 31, 2023</p>
                        <p>Description: Create a simple web page using HTML and CSS.</p>

                    </div>
                </div>

                <div id="MT" class="tabcontent">
                    <h3>MOBILE TECHNOLOGY</h3>
                    <p>Who we are and what we do.</p>
                    <div class="assignment-content">
                        <h4>Assignment 1</h4>
                        <p>Deadline: October 31, 2023</p>
                        <p>Description: Create a simple web page using HTML and CSS.</p>
                    </div>

                    <div class="assignment-content">
                        <h4>Assignment 1</h4>
                        <p>Deadline: October 31, 2023</p>
                        <p>Description: Create a simple web page using HTML and CSS.</p>
                    </div>

                    <div class="assignment-content">
                        <h4>Assignment 1</h4>
                        <p>Deadline: October 31, 2023</p>
                        <p>Description: Create a simple web page using HTML and CSS.</p>
                    </div>
                </div>


            </section>
            <!---------------------------------#RESULT-C------------------------------------>

            // Inside the #rslt-content section

            <section id="rslt-content" class="main-c">
                <DIV class="RSLT-C">
                    <button class="tablink result-tab r" onclick="openPage('sem1', this, '#e46afd')"
                        id="defaultOpen">SEM-1</button>
                    <button class="tablink result-tab r" onclick="openPage('sem2', this, '#e46afd')">SEM-2</button>
                    <button class="tablink result-tab r" onclick="openPage('sem3', this, '#e46afd')">SEM-3</button>
                    <button class="tablink result-tab r" onclick="openPage('sem4', this, '#e46afd')">SEM-4</button>
                    <button class="tablink result-tab r" onclick="openPage('sem5', this, '#e46afd')">SEM-5</button>
                    <button class="tablink result-tab r" onclick="openPage('sem6', this, '#e46afd')">SEM-6</button>

                    <!-- Add similar buttons for SEM-3 to SEM-6 -->

                    <!-- Subject content -->
                    <div id="sem1" class="tabcontent result-content">
                        <h3>SEM-1 Result </h3>
                        <div id="rslt_sem">
                            <?php
        include('rslt_sem1.php');
?>
                        </div>



                        <!-- Content for SEM-1 subjects -->
                    </div>

                    <div id="sem2" class="tabcontent result-content ">
                        <h3>SEM-2 Result</h3>
                        <div id="rslt_sem">
                            <?php
        include('rslt_sem2.php');
?>
                        </div>
                    </div>

                    <!-- Result content -->
                    <div id="sem3" class="tabcontent result-content">
                        <h3>SEM-3 Result </h3>
                        <div id="rslt_sem">
                            <?php
        include('rslt_sem3.php');
?>
                        </div>
                    </div>

                    <div id="sem4" class="tabcontent result-content">
                        <h3>SEM-4 Result </h3>
                        <div id="rslt_sem">
                            <?php
        include('rslt_sem4.php');
?>
                        </div>
                    </div>

                    <div id="sem5" class="tabcontent result-content">
                        <h3>SEM-5 Result </h3>
                        <div id="rslt_sem">
                            <?php
        include('rslt_sem5.php');
?>
                        </div>
                    </div>

                    <div id="sem6" class="tabcontent result-content">
                        <h3>SEM-6 Result </h3>
                        <div id="rslt_sem">
                            <?php
        include('rslt_sem6.php');
?>
                        </div>
                    </div>
                </DIV>
            </section>


        </section>
    </div>


    <!-- icon cdn -->
    <script src="https://cdn.lordicon.com/lordicon-1.1.0.js"></script>
    <!-- script for text typing loop -->
    <!-- <script>

    var type = new Typed('.typing-text',{
        strings : [,'709/21', '5th sem','IT Dept.' ],
        typeSpeed: 120,
        loop:true
    });
</script> -->
</body>

</html>