<?php
ob_start();
session_start();
$reg_no=$_SESSION['reg_no'];
$parent_name = $_POST['parent_name'];
$parent_add = $_POST['parent_add'];
$parent_ph = $_POST['parent_ph'];
$guardian_name = $_POST['guardian_name'];
$guardian_add = $_POST['guardian_add'];
$guardian_ph = $_POST['guardian_ph'];
$guardian_relationship = $_POST['guardian_relationship'];
$parent_off_add= $_POST['parent_off_add'];
$parent_off_ph=$_POST['parent_off_ph'];
$guardian_off_add = $_POST['guardian_off_add'];
$guardian_off_ph = $_POST['guardian_off_ph'];
$native_add = $_POST['native_add'];
$native_ph = $_POST['native_ph'];
$parent_income = $_POST['parent_income'];
$guardian_income = $_POST['guardian_income'];
include('dbconnect.php');
$query = mysqli_query($con, "select * from parent where reg_no='$reg_no'");
$rows = mysqli_num_rows($query);
$_POST = mysqli_fetch_assoc($query);
if($rows == 1)
	{
	$retval=mysqli_query($con,"UPDATE parent SET parent_name='$parent_name',parent_add='$parent_add',parent_ph='$parent_ph',guardian_name='$guardian_name',guardian_add='$guardian_add',guardian_ph='$guardian_ph',guardian_relationship='$guardian_relationship',parent_off_add='$parent_off_add',parent_off_ph='$parent_off_ph',guardian_off_add='$guardian_off_add',guardian_off_ph='$guardian_off_ph',native_add='$native_add',native_ph='$native_ph',parent_income='$parent_income',guardian_income='$guardian_income' WHERE reg_no='$reg_no'");
	if(!$retval)
		{
		print '<script type="text/javascript">'; 
		print 'alert("Error: Sorry for inconvenience. The Data is not Saved. Fill it again.");'; 
		print 'window.location.href = "parent.php";';
		print '</script>';  
		}
    else
		{
		print '<script type="text/javascript">'; 
		print 'alert("Data is Updated.");'; 
		print 'window.location.href = "curr.php";';
		print '</script>';  
		}
	}
else
	{
	$retval=mysqli_query($con, "insert into parent (reg_no,parent_name,parent_add,parent_ph,guardian_name,guardian_add,guardian_ph,guardian_relationship,parent_off_add,parent_off_ph,guardian_off_add,guardian_off_ph,native_add,native_ph,parent_income,guardian_income)values('$reg_no','$parent_name','$parent_add','$parent_ph','$guardian_name','$guardian_add','$guardian_ph','$guardian_relationship','$parent_off_add','$parent_off_ph','$guardian_off_add','$guardian_off_ph','$native_add','$native_ph','$parent_income','$guardian_income') ");
	if(!$retval)
		{
		print '<script type="text/javascript">'; 
		print 'alert("Error: Sorry for inconvenience. The Data is not Saved. Fill it again.");'; 
		print 'window.location.href = "parent.php";';
		print '</script>';  
		}
    else
		{
		print '<script type="text/javascript">'; 
		print 'alert("Data is Saved.");'; 
		print 'window.location.href = "curr.php";';
		print '</script>';  
		}
	}
?>