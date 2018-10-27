<?php
session_start();
if (isset($_POST['login']))
{
	if (empty($_POST['reg_no']) || empty($_POST['smart_card_no'])) 
	{
	header("location:  index.php");
	}
	else
	{
	$reg_no=$_POST['reg_no'];
	$smart_card=$_POST['smart_card_no'];
	include('dbconnect.php');
	$query = mysqli_query($con, "select * from stu_login where smart_card='$smart_card' AND reg_no='$reg_no'");
	$rows = mysqli_num_rows($query);
	$data = mysqli_fetch_assoc($query);
	$fname = $data['F_Name'];
	$lname = $data['l_Name'];
	$year = $data['year'];
	$branch = $data['branch'];
	$name=$fname." ".$lname;
	if ($rows == 1) 
		{
		$_SESSION['reg_no']=$reg_no;
		$_SESSION['name']=$name;
		$_SESSION['branch']=$branch;
		$_SESSION['year']=$year;
		echo $_SESSION['reg_no'];
		echo $name;
		echo $reg_no;
		echo $branch;
		echo $year;
		#header("location:  personal.php");
	}
	else 
	{
	#header("location:  index.php");
	}
	mysqli_close($con);
	}
}
?>