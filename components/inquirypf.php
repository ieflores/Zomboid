<?php
require "../connect.php";
date_default_timezone_set('Asia/Singapore');
$mysqltime = date ('Y-m-d H:i:s', time());

$iid = $_POST['iid'];
$iname = $_POST['iname'];
$iemail = $_POST['iemail'];


$studentno = $_POST["studentno"];
$studentname = $_POST["studentname"];
$subject = $_POST["subject"];
$numabsence = $_POST["numabsence"];
$absencedate = $_POST["absencedate"];
$remarks = $_POST["remarks"];


$sql = "INSERT INTO inquiry (iid, iname, iemail, isbj, imsg, idt)
    VALUES ('$iid', '$iname', '$iemail', 'Absences', '$studentno $studentname $subject $numabsence $absencedate $remarks', '$mysqltime')";
    
if ($con->query($sql) === TRUE) {
echo "New record created successfully";
header('location: ../inquiryfaculty.php');
} else {
echo "Error: " . $sql . "<br>" . $con->error;      
}

$con->close();

?>