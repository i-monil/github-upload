<?php
	$reg_no=$_SESSION['reg_no'];
	include('dbconnect.php');
	$query = mysqli_query($con, "select * from parent where reg_no='$reg_no'");
	$rows = mysqli_num_rows($query);
	$data = mysqli_fetch_assoc($query);
	if($rows == 1)
	{
		$parent_name = $data['parent_name'];
		$parent_add = $data['parent_add'];
		$parent_ph = $data['parent_ph'];
		$guardian_name = $data['guardian_name'];
		$guardian_add = $data['guardian_add'];
		$guardian_ph = $data['guardian_ph'];
		$guardian_relationship = $data['guardian_relationship'];
		$parent_off_add= $data['parent_off_add'];
		$parent_off_ph=$data['parent_off_ph'];
		$guardian_off_add = $data['guardian_off_add'];
		$guardian_off_ph = $data['guardian_off_ph'];
		$native_add = $data['native_add'];
		$native_ph = $data['native_ph'];
		$parent_income = $data['parent_income'];
		$guardian_income = $data['guardian_income'];
	}
	else
	{
	$query = mysqli_query($con, "select * from stu_login where reg_no='$reg_no'");
	$rows = mysqli_num_rows($query);
	$data = mysqli_fetch_assoc($query);
	if($rows == 1)
		{
		$parent_name = $data['parent_name'];
		$parent_add = $data['parent_add'];
		$parent_ph = $data['parent_ph'];
		$guardian_name = $data['guardian_name'];
		$guardian_add = $data['guardian_add'];
		$guardian_ph = $data['guardian_ph'];
		$guardian_relationship = "";
		$parent_off_add= "";
		$parent_off_ph="";
		$guardian_off_add = "";
		$guardian_off_ph = "";
		$native_add = $data['native_add'];
		$native_ph = $data['native_ph'];
		$parent_income = "";
		$guardian_income = "";
		}
	}
?>