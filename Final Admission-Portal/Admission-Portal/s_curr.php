<?php
ob_start();
session_start();
$reg_no=$_SESSION['reg_no'];
$prize_medals= $_POST['prize_medals'];
$art_music= $_POST['art_music'];
$extra_info= $_POST['extra_info'];
include('dbconnect.php');
$query = mysqli_query($con, "select * from cocurricular where reg_no='$reg_no'");
$rows = mysqli_num_rows($query);
$_POST = mysqli_fetch_assoc($query);
if($rows == 1)
	{
	$retval=mysqli_query($con,"UPDATE cocurricular SET prize_medals='$prize_medals',art_music='$art_music',extra_info='$extra_info' WHERE reg_no='$reg_no'");
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
		print 'alert("Data is Updated.");'; 
		print 'window.location.href = "kt.php";';
		print '</script>';  
		}
	}
else
	{
	$retval=mysqli_query($con, "insert into cocurricular (reg_no,prize_medals,art_music,extra_info)values('$reg_no','$prize_medals','$art_music','$extra_info')");
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
		print 'window.location.href = "kt.php";';
		print '</script>';  
		}
	}
?>