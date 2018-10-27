<?php
$reg_no=$_SESSION['reg_no'];
include('dbconnect.php');
$personal=mysqli_query($con, "select * from academics where reg_no='$reg_no' and serial='1'");
$rows = mysqli_num_rows($personal);
$data = mysqli_fetch_assoc($personal);
if($rows == 1)
{
$exam1 = $data['exam'];
$passing_year1 = $data['passing_year'];
$percentage1 = $data['percentage'];
$class1 = $data['class'];
$uni1 = $data['uni'];
}
else
{
$exam1 = '';
$passing_year1 = '';
$percentage1 = '';
$class1 = '';
$uni1 = '';
}
$personal=mysqli_query($con, "select * from academics where reg_no='$reg_no' and serial='2'");
$rows = mysqli_num_rows($personal);
$data = mysqli_fetch_assoc($personal);
if($rows == 1)
{
$exam2 = $data['exam'];
$passing_year2 = $data['passing_year'];
$percentage1 = $data['percentage'];
$class2 = $data['class'];
$uni2 = $data['uni'];
}
else
{
$exam2 = '';
$passing_year2 = '';
$percentage2 = '';
$class2 = '';
$uni2 = '';
}
$personal=mysqli_query($con, "select * from academics where reg_no='$reg_no' and serial='3'");
$rows = mysqli_num_rows($personal);
$data = mysqli_fetch_assoc($personal);
if($rows == 1)
{
$exam3 = $data['exam'];
$passing_year3 = $data['passing_year'];
$percentage1 = $data['percentage'];
$class3 = $data['class'];
$uni3 = $data['uni'];
}
else
{
$exam3 = '';
$passing_year3 = '';
$percentage3 = '';
$class3 = '';
$uni3 = '';
}
$personal=mysqli_query($con, "select * from academics where reg_no='$reg_no' and serial='4'");
$rows = mysqli_num_rows($personal);
$data = mysqli_fetch_assoc($personal);
if($rows == 1)
{
$exam4 = $data['exam'];
$passing_year4 = $data['passing_year'];
$percentage1 = $data['percentage'];
$class4 = $data['class'];
$uni4 = $data['uni'];
}
else
{
$exam4 = '';
$passing_year4 = '';
$percentage4 = '';
$class4 = '';
$uni4 = '';
}
$personal=mysqli_query($con, "select * from academics where reg_no='$reg_no' and serial='5'");
$rows = mysqli_num_rows($personal);
$data = mysqli_fetch_assoc($personal);
if($rows == 1)
{
$exam5 = $data['exam'];
$passing_year5 = $data['passing_year'];
$percentage1 = $data['percentage'];
$class5 = $data['class'];
$uni5 = $data['uni'];
}
else
{
$exam5 = '';
$passing_year5 = '';
$percentage5 = '';
$class5 = '';
$uni5 = '';
}
$personal=mysqli_query($con, "select * from academics where reg_no='$reg_no' and serial='6'");
$rows = mysqli_num_rows($personal);
$data = mysqli_fetch_assoc($personal);
if($rows == 1)
{
$exam6 = $data['exam'];
$passing_year6 = $data['passing_year'];
$percentage1 = $data['percentage'];
$class6 = $data['class'];
$uni6 = $data['uni'];
}
else
{
$exam6 = '';
$passing_year6 = '';
$percentage6 = '';
$class6 = '';
$uni6 = '';
}
$personal=mysqli_query($con, "select * from academics where reg_no='$reg_no' and serial='7'");
$rows = mysqli_num_rows($personal);
$data = mysqli_fetch_assoc($personal);
if($rows == 1)
{
$exam7 = $data['exam'];
$passing_year7 = $data['passing_year'];
$percentage1 = $data['percentage'];
$class7 = $data['class'];
$uni7 = $data['uni'];
}
else
{
$exam7 = '';
$passing_year7 = '';
$percentage7 = '';
$class7 = '';
$uni7 = '';
}
$personal=mysqli_query($con, "select * from academics where reg_no='$reg_no' and serial='8'");
$rows = mysqli_num_rows($personal);
$data = mysqli_fetch_assoc($personal);
if($rows == 1)
{
$exam8 = $data['exam'];
$passing_year8 = $data['passing_year'];
$percentage1 = $data['percentage'];
$class8 = $data['class'];
$uni8 = $data['uni'];
}
else
{
$exam8 = '';
$passing_year8 = '';
$percentage8 = '';
$class8 = '';
$uni8 = '';
}
?>