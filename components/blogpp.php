<?php
require "../connect.php";
date_default_timezone_set('Asia/Singapore');
$mysqltime = date ('Y-m-d H:i:s', time());


$sbj = $_POST['sbj'];
$msg = $_POST['msg'];

$filename = $_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];
$folder = "../images/bimg/" . $filename;
move_uploaded_file($tempname, $folder);


$sql = "INSERT INTO blog (sbj, msg, filename, dt)
    VALUES ('$sbj', '$msg', '$filename', '$mysqltime')";
    
    

if ($con->query($sql) === TRUE) {
echo "New record created successfully";
header('location: ../guidanceBlog.php');
} else {
echo "Error: " . $sql . "<br>" . $con->error;      
}

$con->close();

?>