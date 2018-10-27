<?php
ob_start();
session_start();
$reg_no=$_SESSION['reg_no'];
include('dbconnect.php');
for($i=1;$i<9;$i++)
{
	if($_POST["exam$i"]!="")
	{
		$exam=$_POST["exam$i"];
		$passing_year=$_POST["passing_year$i"];
		$class=$_POST["class$i"];
		$percentage=$_POST["percentage$i"];
		$uni=$_POST["uni$i"];
		$query = mysqli_query($con, "select * from academics where reg_no='$reg_no' AND serial='$i'");
		$rows = mysqli_num_rows($query);
		$data = mysqli_fetch_assoc($query);
		if($rows == 0)
		{
		$retval=mysqli_query($con, "insert into academics(reg_no,serial,exam,passing_year,class,percentage,uni)values('$reg_no','$i','$exam','$passing_year','$class','$percentage','$uni') ");
		}
		else
		{
		$retval=mysqli_query($con, "update academics set exam='$exam',passing_year='$passing_year',class='$class',percentage='$percentage',uni='$uni' where reg_no='$reg_no' and serial='$i')");
		}
	}
}
	if(!$retval)
		{
		print '<script type="text/javascript">'; 
		print 'alert("Error: Sorry for inconvenience. The Data is not Saved. Fill it again.");'; 
#		print 'window.location.href = "academic.php";';
		print '</script>';  
		}
    else
		{
		print '<script type="text/javascript">'; 
		print 'alert("Data is Updated.");'; 
#		print 'window.location.href = "parent.php";';
		print '</script>';  
		}	
?>