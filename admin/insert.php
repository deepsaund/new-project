<?php
session_start();

include_once('../conn.php');
if(isset($_POST['submit'])){



// Gather other form data   
// $username = $_POST['username'];
// $password = md5($_POST['password']);
$contact = $_POST['contact'];
$email = $_POST['email'];
// $user_type = $_POST['user_type'];
$fname = $_POST['std_name'];

// Additional fields
$date_of_birth = $_POST['date_of_birth'];
$gender = $_POST['gender'];
$category = $_POST['category'];
$address = $_POST['address'];
// $id_number = $_POST['id'];
$profile_pic = $_FILES['photo']['name'];
$sql = "INSERT INTO students ( contact, email, f_name, date_of_birth, gender, category, address, photo)
        VALUES ( '$contact', '$email', '$fname', '$date_of_birth', '$gender', '$category', '$address','$profile_pic')";
$result = mysqli_query($conn, $sql);
// Perform the database query
if ($result) {  
    move_uploaded_file($_FILES['photo']['tmp_name'], "pp/".$_FILES["photo"]['name']);
    echo "Data inserted successfully!";
    // header('location:student/home.php');
} else {
    echo "failed";
   echo  "Error: " . $sql . "<br>" . mysqli_error($conn);
     // header('location:student/home.php');
}
}
// Close the database connection
mysqli_close($conn);
?>
