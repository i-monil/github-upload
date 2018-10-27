<?php
	$reg_no=$_SESSION['reg_no'];
	include('dbconnect.php');
	$query = mysqli_query($con, "select * from cocurricular where reg_no='$reg_no'");
	$rows = mysqli_num_rows($query);
	$data = mysqli_fetch_assoc($query);
	if($rows == 1)
	{
		$prize_medals= $data['prize_medals'];
		$art_music= $data['art_music'];
		$extra_info= $data['extra_info'];
	}
	else
	{
		$prize_medals= "";
		$art_music= "";
		$extra_info= "";
	}
?>