<?php
if (!isset($_SESSION['role']) || $_SESSION['role'] != 'faculty') {
    header("Location: ../login/login_form.php");
    exit();
}
echo "faulty home page ";
?>