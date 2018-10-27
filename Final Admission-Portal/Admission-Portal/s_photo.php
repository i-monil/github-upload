<?php
ob_start();
session_start();
include('dbconnect.php');
$reg_no=$_SESSION['reg_no'];
$target_dir = "photos/";
$target_file = $target_dir . $reg_no.".jpg";
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
{
    $document=mysqli_query($con, "select * from stu_photo where reg_no='$reg_no'");
	$rows = mysqli_num_rows($document);
	$data = mysqli_fetch_assoc($document);
	if($rows == 1)
    {
	mysqli_query($con, "update stu_photo set photo_path='$target_file' where reg_no='$reg_no'");
	print '<script type="text/javascript">'; 
	print 'alert("Data is Updated.");'; 
	print 'window.location.href = "print.php";';
	print '</script>';
	}
	else
	{
	mysqli_query($con, "insert into stu_photo(reg_no,photo_path)values('$reg_no','$target_file') ");
	print '<script type="text/javascript">'; 
	print 'alert("Data is Inserted.");'; 
	print 'window.location.href = "print.php";';
	print '</script>';
	}
}
else
{
print '<script type="text/javascript">'; 
print 'alert("No file selected to insert.");'; 
print 'window.location.href = "photo.php";';
print '</script>';
}
?>