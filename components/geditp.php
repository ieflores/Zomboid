<?php
require "../connect.php";

$id=$_GET['id'];
$prem = $_POST['prem'];
$tm = $_POST['time'];
$dt = $_POST['date'];
$query=mysqli_query($con,"SELECT * FROM appoint where id =".$id);

	
    
mysqli_query($con,"UPDATE `appoint` SET `prem`='$prem', `tm`='$tm', `dt`='$dt' WHERE id=".$id);
header('location: ../guidance.php');


$con->close();

?>