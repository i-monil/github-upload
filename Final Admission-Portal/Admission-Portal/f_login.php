<?php
session_start();
$error='';
if (isset($_POST['submit']))
{
	if (empty($_POST['emp_no']) || empty($_POST['pass'])) 
	{
	$error = "Employee Number and Password is Compulsory";
	}
else
{
	if (isset($_POST['emp_no']) && isset($_POST['pass'])) 
	{
	$emp_no = $_POST['emp_no'];
	$pass = $_POST['pass'];
		if (isset($_POST['remember']) && $_POST['remember'] == 'on') 
		{
		setcookie("emp_no", $emp_no, time()+(60*60*24*30));
		setcookie("pass", $pass, time()+(60*60*24*30));  /* expire in 30 daysr */
		} 
	}
include('dbconnect.php');
$query = mysqli_query($con, "select * from f_login where emp_id='$emp_no' AND password='$pass'");
$rows = mysqli_num_rows($query);
$data = mysqli_fetch_assoc($query);
if ($rows == 1) 
	{
	$_SESSION['emp_no']=$emp_no;
	}
else
	{
	$emp_no='';
	$pass='';
	$error = "Employee Number and Password is invalid";	
	}
mysqli_close($con);
}
}
?>