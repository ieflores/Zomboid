<?php
require "../connect.php";

$aid = $_POST['name'];
$aname = $_POST['aname'];
$aemail = $_POST['aemail'];
$sbj = $_POST['defsubj'];
$prem = $_POST['prem'];
$tm = $_POST['time'];
$dt = $_POST['date'];


$sql = "INSERT INTO appoint (aid, aname, aemail, sbj, prem, tm, dt)
    VALUES ('$aid', '$aname', '$aemail', '$sbj' , '$prem', '$tm', '$dt')";
    
if ($con->query($sql) === TRUE) {
echo "New record created successfully";
header('location: ../guidanceAppoint.php');
} else {
echo "Error: " . $sql . "<br>" . $con->error;      
}

$con->close();

?>