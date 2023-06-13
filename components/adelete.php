<?php
require '../connect.php';

	$id=$_GET['id'];
	mysqli_query($con,"delete from `appoint` where id=".$id);
	header('location:../guidance.php');
?>