<?php
	$reg_no=$_SESSION['reg_no'];
	include('dbconnect.php');
	$query = mysqli_query($con, "select * from sem_kt where reg_no='$reg_no'");
	$rows = mysqli_num_rows($query);
	$data = mysqli_fetch_assoc($query);
	if($rows == 1)
	{
	$pass_kt=$data['pass_kt'];
	$kt=$data['kt'];
	if($kt==0)
		$kt="";
	}
	else
	{
	$pass_kt="";
	$kt="";
	}
?>