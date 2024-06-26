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
    <div class="wrapper1">

        <div class="wrapper">
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
                                    <li><a href="#" class="rounded">Add Teachers</a></li>
                                    <li><a href="#" class="rounded">Edit Teachers</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="mb-1">
                            <button class="btn btn-toggle align-items-center rounded collapsed"
                                data-bs-toggle="collapse" data-bs-target="#departments-collapse" aria-expanded="false">
                                Departments
                            </button>
                            <div class="collapse" id="departments-collapse">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <li><a href="#" class="rounded">Add Department</a></li>
                                    <li><a href="#" class="rounded">Edit Department</a></li>
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
                                    <li><a href="#students-content" class="rounded">Add Semester</a></li>
                                    <li><a href="#" class="rounded">Edit Semester</a></li>
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
                                    <li><a href="#" class="rounded">Add courses</a></li>
                                    <li><a href="#" class="rounded">Edit courses</a></li>
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
                                    <li><a href="#" class="rounded">New...</a></li>
                                    <li><a href="#" class="rounded">Profile</a></li>
                                    <li><a href="#" class="rounded">Settings</a></li>
                                    <li><a href="#" class="rounded">Sign out</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <main class="container">
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
                        <p>test page 1</p>
                        <?php
                        include('add_student.php');
                        ?>
                    </div>
                    <div class="row" id="edit_students-content">
                        <p>ertyttttttttttttttt</p>
                    </div>
                    <div class="row" id="Department-content">
    
                    </div>
                    <div class="row" id="semester-content">
    
                    </div>
                    <div class="row" id="courses-content">
    
                    </div>
                </div>
        </div>
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>

    <script src="script.js" ; </body>

</html>