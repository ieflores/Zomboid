<?php
require '../connect.php';

	$id=$_GET['id'];
	mysqli_query($con,"delete from `inquiry` where id=".$id);
	header('location:../guidanceInq.php');
?>