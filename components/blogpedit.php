<?php
require "../connect.php";
date_default_timezone_set('Asia/Singapore');
$mysqltime = date ('Y-m-d H:i:s', time());

$id=$_GET['id'];
$sbj = $_POST['sbj'];
$msg = $_POST['msg'];

$filename = $_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];
$folder = "../images/bimg/" . $filename;
move_uploaded_file($tempname, $folder);


$query=mysqli_query($con,"SELECT * FROM blog where id =".$id);
    
mysqli_query($con,"UPDATE `blog` SET `sbj`='$sbj', `msg`='$msg' , `filename`='$filename', `dt`='$mysqltime' WHERE id=".$id);
header('location: ../guidanceBlog.php');
$con->close();
?>