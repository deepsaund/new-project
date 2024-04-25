<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>


    <div class="wrapper">
        <div class="wrapper1">
            <main class="container">
                <nav class="offcanvas offcanvas-start show" tabindex="-1" id="offcanvas" data-bs-keyboard="false"
                    data-bs-backdrop="true" data-bs-scroll="true">
                    <div class="offcanvas-header border-bottom">
                        <a href="/" class="d-flex align-items-center text-decoration-none offcanvas-title d-sm-block">
                            <h3>
                                Admin Dashboard
                            </h3>
                        </a>
                    </div>
                    <div class="offcanvas-body px-0">

                        <ul class="list-unstyled ps-0">
                            <li class="mb-1">
                                <button class="btn btn-toggle align-items-center rounded " data-bs-toggle="collapse"
                                    data-bs-target="#students-collapse" aria-expanded="false">
                                    Students
                                </button>
                                <div class="collapse show" id="students-collapse" style="">
                                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                        <li><a href="#add_students-content" class="rounded">Add Students</a></li>
                                        <li><a href="#edit_students-content" class="rounded">Edit students</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="mb-1">
                                <button class="btn btn-toggle align-items-center rounded collapsed"
                                    data-bs-toggle="collapse" data-bs-target="#teachers-collapse" aria-expanded="false">
                                    Teachers
                                </button>
                                <div class="collapse" id="teachers-collapse">
                                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                        <li><a href="#add_teachers-content" class="rounded">Add Teachers</a></li>
                                        <li><a href="#edit_teachers-content" class="rounded">Edit Teachers</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="mb-1">
                                <button class="btn btn-toggle align-items-center rounded collapsed"
                                    data-bs-toggle="collapse" data-bs-target="#departments-collapse"
                                    aria-expanded="false">
                                    Departments
                                </button>
                                <div class="collapse" id="departments-collapse">
                                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                        <li><a href="#add_departments-content" class="rounded">Add Department</a></li>
                                        <li><a href="#edit_departments-content" class="rounded">Edit Department</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="mb-1">
                                <button class="btn btn-toggle align-items-center rounded collapsed"
                                    data-bs-toggle="collapse" data-bs-target="#semester-collapse" aria-expanded="false">
                                    Semester
                                </button>
                                <div class="collapse" id="semester-collapse">
                                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                        <li><a href="#add_semester-content" class="rounded">Add Semester</a></li>
                                        <li><a href="#edit_semester-content" class="rounded">Edit Semester</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="mb-1">
                                <button class="btn btn-toggle align-items-center rounded collapsed"
                                    data-bs-toggle="collapse" data-bs-target="#courses-collapse" aria-expanded="false">
                                    Courses
                                </button>
                                <div class="collapse" id="courses-collapse">
                                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                        <li><a href="#add_courses-content" class="rounded">Add courses</a></li>
                                        <li><a href="#edit_courses-content" class="rounded">Edit courses</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="mb-1">
                                <button class="btn btn-toggle align-items-center rounded collapsed"
                                    data-bs-toggle="collapse" data-bs-target="#Announcements-collapse"
                                    aria-expanded="false">
                                    Announcements
                                </button>
                                <div class="collapse" id="Announcements-collapse">
                                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                        <li><a href="#add_announcements-content" class="rounded">Add Announcement</a>
                                        </li>
                                        <li><a href="#edit_announcements-content" class="rounded">Edit Announcement</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="border-top my-3"></li>
                            <li class="mb-1">
                                <button class="btn btn-toggle align-items-center rounded collapsed"
                                    data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
                                    Account
                                </button>
                                <div class="collapse" id="account-collapse">
                                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                        
                                        <li><a href="../logout.php" class="rounded">Sign out</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="row">
                    <div class="col">
                        <!-- toggler -->
                        <button id="sidebarCollapse" class="float-end" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvas" role="button" aria-label="Toggle menu">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </div>


                </div>
                <div class="main">

                    <div id="add_students-content" class="row">
                        <div class="add-containerr">
                            <h2 id="title">Add Students
                                <hr>
                            </h2>
                            <?php
                       
                        include('add_student.php');
                        ?>
                        </div>
                    </div>
                    <div class="row" id="edit_students-content">
                        <div class="table-container">
                            <h2 id="title">Manage Students
                                <hr>
                            </h2>
                            <?php include('manage_std.php'); ?>
                        </div>
                    </div>
                    <div class="row" id="add_teachers-content">
                        <div class="add-container">
                            <h2 id="title">Add Teachers
                                <hr>
                            </h2>
                            <?php
                        include('faculty_form.php');
                        ?>

                        </div>
                    </div>
                    <div class="row" id="edit_teachers-content">
                        <div class="table-container">
                            <h2 id="title">Edit Teachers
                                <hr>
                            </h2>
                            <?php
                        include('manage_teacher.php');
                        ?>
                        </div>
                    </div>
                    <div class="row" id="add_departments-content">
                        <div class="table-container">
                            <h2 id="title">Add Departments
                                <hr>
                            </h2>
                            <?php
                            include("department_form.php");
                            ?>

                        </div>
                    </div>
                    <div class="row" id="edit_departments-content">
                        <div class="table-container">
                            <h2 id="title">Manage Departments
                                <hr>
                            </h2>
                            <?php
                            include('manage_dept.php');
                            ?>
                        </div>
                    </div>
                    <div class="row" id="add_semester-content">
                        <div class="table-container">
                            <h2 id="title">Add Semester
                                <hr>
                            </h2>
                        <?php
                        include("semester_form.php");
                        ?>
                            </div>
                    </div>
                    <div class="row" id="edit_semester-content">
                        <div class="table-container">
                            <h2 id="title">Manage Semester
                                <hr>
                            </h2>
                        <?php
                        include("manage_semesters.php");
                        ?>
                            </div>
                    </div>
                    <div class="row" id="add_courses-content">
                        <div class="table-container">
                            <h2 id="title">Add Courses
                                <hr>
                            </h2>
                        <?php
                        include("course_form.php");
                        ?>
                        </div>
                    </div>
                    <div class="row" id="edit_courses-content">
                        <div class="table-container">
                            <h2 id="title">Manage Courses
                                <hr>
                            </h2>
                        <?php
                        include("manage_courses.php");
                        ?>
                        </div>
                    </div>
                    <div class="row" id="add_announcements-content">
                        <div class="add-containerr">
                            <h2 id="title">Add Announcement
                                <hr>
                            </h2>
                        <?php
                        include("announcement_form.php");
                        ?>
                        </div>
                    </div>
                    <div class="row" id="edit_announcements-content">
                        <div class="add-containerr">
                            <h2 id="title">Manage announcement
                                <hr>
                            </h2>
                        <?php
                        include("manage_announcements.php");
                        ?>
                        </div>
                    </div>
                </div>
        </div>
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>

    <script src="script.js"> </script>

</body>

</html>