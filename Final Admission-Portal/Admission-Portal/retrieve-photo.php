<?php
	$reg_no=$_SESSION['reg_no'];
	include('dbconnect.php');
	$query = mysqli_query($con, "select * from stu_photo where reg_no='$reg_no'");
	$rows = mysqli_num_rows($query);
	$data = mysqli_fetch_assoc($query);
	if($rows == 1)
	{
	$photo_path=$data['photo_path'];
	}
	else
	{
	$photo_path="photos/no-user-image.gif";
	}
?>