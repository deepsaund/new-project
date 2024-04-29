<html>
    <head><style>/* Assuming these are your existing styles */

/* General styling */
.result-table {
    width: 70%;
    overflow: hidden;
    border-collapse: collapse;
    background-color: rgba(255, 255, 255, .1);
    border-radius: 10px;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
    margin-bottom: 20px;
}

.result-table caption {
    font-weight: bold;
    font-size: 18px;
    background-color: rgba(255, 255, 255, 0.1);
    color: #fff;
    padding: 10px;
    border-radius: 10px 10px 0 0;
    text-align: center; 
}

.result-table th,
.result-table td {
    padding: 12px;
    text-align: center;
    border: 1px solid rgba(255, 255, 255, 0.1);
}

.result-table th {
    background-color:  rgba(255, 255, 255, 0.1);
    color: #fff;
}

.result-table tr:nth-child(even) {
    background-color: rgba(0, 0, 0, 0.1);
}

.result-table tr:nth-child(odd) {
    background-color: rgba(255, 255, 255, 0.1);
}

.result-table tr:hover {
    background-color: #ccc;
}
</style>
</head>
<body>
   
<?php

include('../connection.php');
// Retrieve and display marks
$retrieveMarksSql = "SELECT users.f_name, subjects.name AS subject, grades.marks
                     FROM grades 
                     JOIN users ON grades.student_id = users.id
                     JOIN subjects ON grades.subject_id = subjects.id
                     WHERE semester_id = 2 and student_id = $id_number
                     ORDER BY users.f_name";

$retrieveMarksResult = $conn->query($retrieveMarksSql);

if ($retrieveMarksResult->num_rows > 0) {
    echo "<div class='table_cnt'>";

    echo "<table class='result-table' border='1'>";
    echo "<tr><th>Student Name</th><th>Subject</th><th>Marks</th></tr>";

    while ($row = $retrieveMarksResult->fetch_assoc()) {
        $studentName = $row['f_name'];
        $subjectName = $row['subject'];
       
        $marks = $row['marks'];

        echo "<tr><td>$studentName</td><td>$subjectName</td><td>$marks</td></tr>";
    }

    echo "</table>";
    echo "</div>";
}

else {
    echo "No marks found.";
}

$conn->close();
?>
</html>