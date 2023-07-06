<?php
require "../connect.php";
date_default_timezone_set('Asia/Singapore');
$mysqltime = date ('Y-m-d H:i:s', time());

$iid = $_POST['iid'];
$iname = $_POST['iname'];
$iemail = $_POST['iemail'];
$isbj = $_POST['isbj'];
$others = $_POST['others'];
$others = $_POST['others'];
$imsg = $_POST['imsg'];
if ($_POST['isbj'] != "Others"){
    $sql = "INSERT INTO inquiry (iid, iname, iemail, isbj, imsg, idt)
    VALUES ('$iid', '$iname', '$iemail', '$isbj', '$imsg', '$mysqltime')";
    if ($con->query($sql) === TRUE) {
        echo "New record created successfully";
        header('location: ../inquirystudent.php');
        } else {
        echo "Error: " . $sql . "<br>" . $con->error;      
        }
        
        $con->close();
}
else {
    $sql = "INSERT INTO inquiry (iid, iname, iemail, isbj, imsg, idt)
    VALUES ('$iid', '$iname', '$iemail', '$others', '$imsg', '$mysqltime')";

if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
    header('location: ../inquirystudent.php');
    } else {
    echo "Error: " . $sql . "<br>" . $con->error;      
    }
    
    $con->close();
}






    


?>