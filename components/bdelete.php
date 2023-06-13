<?php
require '../connect.php';

	$id=$_GET['id'];
	mysqli_query($con,"delete from `blog` where id=".$id);
	header('location:../guidanceBlog.php');
?>