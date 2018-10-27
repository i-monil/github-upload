<?php
ob_start();
session_start();
$reg_no=$_SESSION['reg_no'];
$pass_kt= $_POST['kt'];
$kt= $_POST['kt_no'];
include('dbconnect.php');
if($pass_kt=='pass')
	$kt=0;
$query = mysqli_query($con, "select * from sem_kt where reg_no='$reg_no'");
$rows = mysqli_num_rows($query);
$_POST = mysqli_fetch_assoc($query);
if($rows == 1)
	{
	$retval=mysqli_query($con,"UPDATE sem_kt SET pass_kt='$pass_kt',kt='$kt' WHERE reg_no='$reg_no'");
	echo "update";
	if(!$retval)
		{
		print '<script type="text/javascript">'; 
		print 'alert("Error: Sorry for inconvenience. The Data is not Saved. Fill it again.");'; 
		print 'window.location.href = "kt.php";';
		print '</script>';  
		}
    else
		{
		print '<script type="text/javascript">'; 
		print 'alert("Data is Updated.");'; 
		print 'window.location.href = "photo.php";';
		print '</script>';  
		}
	}
else
	{
	$retval=mysqli_query($con, "insert into sem_kt (reg_no,pass_kt,kt)values('$reg_no','$pass_kt','$kt')");
	if(!$retval)
		{
		print '<script type="text/javascript">'; 
		print 'alert("Error: Sorry for inconvenience. The Data is not Saved. Fill it again.");'; 
		print 'window.location.href = "curr.php";';
		print '</script>';  
		}
    else
		{
		print '<script type="text/javascript">'; 
		print 'alert("Data is Saved.");'; 
		print 'window.location.href = "photo.php";';
		print '</script>';  
		}
	}
?>