<?php
ob_start();
session_start();
if(!(isset($_SESSION['reg_no'])))
{
header("location: index.php");
}
if(isset($_SESSION['reg_no']))
{
include('dbconnect.php');
$reg_no=$_SESSION['reg_no'];
$query = mysqli_query($con, "select * from confirm where reg_no='$reg_no'");
$rows = mysqli_num_rows($query);
$data = mysqli_fetch_assoc($query);
$status = $data['approve'];
if($status)
	header("location: s_print.php");
}
include('retrieve-academic.php');
?>
<html xmlns:v="urn:schemas-microsoft-com:vml">
<html xmlns:v="urn:schemas-microsoft-com:vml"
xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:dt="uuid:C2F41010-65B3-11d1-A29F-00AA00C14882"
xmlns="http://www.w3.org/TR/REC-html40">
<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<link rel="icon" type="image/png" href="image5101.png">
<title>Academic Information - Admission Portal (Student)</title>
<script language=JavaScript>
function nextj()
{
	var r= confirm("You are redirecting to Parent Information without saving data.");
	if(r == true)
		window.location = "parent.php";
	else
		window.location = "academic.php";
}
function prevj()
{
	var r= confirm("You are redirecting to Personal Information without saving data.");
	if(r == true)
		window.location = "personal.php";
	else
		window.location = "academic.php";
}
</script>
<style>
table.border
	{
    outline: thin solid;
	}
.button {
  padding: 10px 10px;
  font-size:16px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #000000;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}
.button1 {
  padding: 10px 10px;
  font-size:13px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #ffffff;
  background-color: #4caf50;
  width:120%;
}
.button1:hover {
color: #000000;
background-color: #ffffff;
}
.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
<!--
 /* Font Definitions */
@font-face
	{font-family:Ubuntu;
	panose-1:2 11 5 4 3 6 2 3 2 4;}
@font-face
	{font-family:Arial;
	panose-1:2 11 6 4 2 2 2 2 2 4;}
 /* Style Definitions */
p.MsoNormal, li.MsoNormal, div.MsoNormal
	{margin-right:0pt;
	text-indent:0pt;
	margin-top:0pt;
	margin-bottom:0pt;
	text-align:left;
	font-family:"Times New Roman";
	font-size:10.0pt;
	color:black;}
p.MsoBodyText3, li.MsoBodyText3, div.MsoBodyText3
	{margin-right:0pt;
	text-indent:0pt;
	margin-top:0pt;
	margin-bottom:8.0pt;
	text-align:left;
	font-family:Arial;
	font-size:10.0pt;
	color:black;}
p.MsoOrganizationName, li.MsoOrganizationName, div.MsoOrganizationName
	{margin-right:0pt;
	text-indent:0pt;
	margin-top:0pt;
	margin-bottom:0pt;
	text-align:center;
	font-family:"Courier New";
	font-size:10.0pt;
	color:white;
	font-weight:bold;}
p.MsoTagline, li.MsoTagline, div.MsoTagline
	{margin-right:0pt;
	text-indent:0pt;
	margin-top:0pt;
	margin-bottom:0pt;
	text-align:center;
	font-family:Arial;
	font-size:10.0pt;
	color:navy;}
p.MsoTitle3, li.MsoTitle3, div.MsoTitle3
	{margin-right:0pt;
	text-indent:0pt;
	margin-top:0pt;
	margin-bottom:0pt;
	text-align:left;
	font-family:"Courier New";
	font-size:24.0pt;
	color:black;
	font-weight:bold;}
ol
	{margin-top:0in;
	margin-bottom:0in;
	margin-left:-2197in;}
ul
	{margin-top:0in;
	margin-bottom:0in;
	margin-left:-2197in;}
-->
</style>
</head>

<body link=purple vlink=navy style='margin:0'>

<div style='position:absolute;width:10.-2249in;height:5.0553in'>
<form name="form" action="s_academic.php" method="post" enctype="multipart/form-data">
<span style='position:absolute;z-index:105;
left:0px;top:0px;width:1150px;height:192px'><img width=1366 height=192
src=image499.png v:shapes="_x0000_s1198"></span>
<span style='position:absolute;z-index:106;
left:174px;top:144px;width:63px;height:108px'><img width=63 height=108
src=image500.png v:shapes="_x0000_s1199"></span>
<span style='position:absolute;z-index:107;
left:0px;top:100px;width:174px;height:105px'><img width=174 height=540
src=image501.png v:shapes="_x0000_s1200"></span>
<span style='position:absolute;
z-index:108;left:173px;top:73px;width:1258px;height:145px'><img width=1258
height=145 src=image502.png v:shapes="_x0000_s1201"></span>
<span style='position:absolute;
z-index:109;left:296px;top:0px;width:776px;height:72px'><img width=776
height=72 src=image503.png v:shapes="_x0000_s1202"></span>
<span style='position:absolute;z-index:110;
left:328px;top:3px;width:712px;height:60px'>

<table cellpadding=0 cellspacing=0>
 <tr>
  <td width=712 height=60 valign=middle style='vertical-align:top'>
  <div v:shape="_x0000_s1203" style='padding:8.6249pt 2.85pt 2.85pt 2.85pt'
  class=shape>
  <p class=MsoOrganizationName><span lang=en-US style='font-size:24.0pt;
  font-family:Ubuntu;language:en-US'>Shah and Anchor Kutchhi Engineering College</span></p>
  </div>
  </td>
 </tr>
</table>

</span>
<span style='position:absolute;z-index:111;
left:512px;top:72px;width:344px;height:27px'>

<table cellpadding=0 cellspacing=0>
 <tr>
  <td width=344 height=27 style='vertical-align:top'>
  <div v:shape="_x0000_s1204" style='padding:2.85pt 2.85pt 2.85pt 2.85pt'
  class=shape>
  <p class=MsoTagline><span lang=en-US style='font-size:14.0pt;line-height:
  100%;font-family:Ubuntu;font-weight:bold;language:en-US'>Admission Portal </span></p>
  </div>
  </td>
 </tr>
</table>

</span>
<span style='position:absolute;z-index:112;
left:397px;top:96px;width:556px;height:89px'>

<table cellpadding=0 cellspacing=0>
 <tr>
  <td width=556 height=89 style='vertical-align:top'>
  <div v:shape="_x0000_s1205" style='padding:2.85pt 2.85pt 2.85pt 2.85pt'
  class=shape>
  <p class=MsoTitle3 style='text-align:center;text-align:center'><span
  lang=en-US style='font-family:Ubuntu;language:en-US'></span></p>
  <p class=MsoTitle3 style='text-align:center;text-align:center'><span
  lang=en-US style='font-size:14.0pt;line-height:100%;font-family:Ubuntu;
  language:en-US'></span></p>
  </div>
  </td>
 </tr>
</table>

</span>
<span style='position:absolute;z-index:113;
left:221px;top:194px;width:1043px;height:47px'>
<span style='position:absolute;z-index:15;
left:-220px;top:-200px;width:136px;height:136px'><img width=136 height=136
src=image5102.png>
<a href="http://www.shahandanchor.com" target="_blank"><input style="background-color:#99CC99;margin-left:10px" type="button" value="SAKEC HOME"></a></span>
<span style='position:absolute;z-index:15;left:-220px;top:50px;width:136px;height:136px'>
<div style="width:100%">
<a href="personal.php" title="Personal Information"><input type="button" class="button1" name="personal" value="Personal Information"></a>
<a href="academic.php" title="Academic Information"><input type="button" class="button1" name="academic" value="Academic Information"></a>
<a href="parent.php" title="Parent Information"><input type="button" class="button1" name="parent" value="Parent Information"></a>
<a href="curr.php" title="Co-Curricular Information"><input type="button" class="button1" name="curr" value="Co-Curricular Information"></a>
<a href="kt.php" title="Academic KT Information"><input type="button" class="button1" name="kt" value="Academic KT Information"></a>
<a href="photo.php" title="Photo Upload"><input type="button" class="button1" name="photo" value="Photo Upload"></a>
<a href="print.php" title="Print Form"><input type="button" class="button1" name="print" value="Print Form"></a>
</div>
</span>
<center>
<div style='position:absolute;margin-left:700px;margin-top:-100px;width:384px;
height:26px;z-index:224'><font face="Ubuntu">
Welcome <strong><?php echo $_SESSION['name'];?>(<?php echo $_SESSION['reg_no'];?>)</strong>  |  <a href="logout.php">Logout</a>
</div>
<table class="border" border="1" cellspacing="0" cellpadding="3">
<tr><th>Sr. No.</th><th>Exam</th><th>Passing Year</th><th>Class</th><th>Percentage/CGPI</th><th>University/StateBoard</th></tr>
<tr>
<th>1</th>
<td>
<select name="exam1" size="1">
  <option value="">---Select your Exam---</option>
  <option value="S.S.C."<?php if($exam1 == 'S.S.C.'){ echo 'selected="selected"';} ?>>S.S.C.</option>
  <option value="H.S.C."<?php if($exam1 == 'H.S.C.'){ echo 'selected="selected"';} ?>>H.S.C.</option>
  <option value="Diploma"<?php if($exam1 == 'Diploma'){ echo 'selected="selected"';} ?>>Diploma</option>
  <option value="Semester - I"<?php if($exam1 == 'Semester - I'){ echo 'selected="selected"';} ?>>Semester - I</option>
  <option value="Semester - II"<?php if($exam1 == 'Semester - II'){ echo 'selected="selected"';} ?>>Semester - II</option>
  <option value="Semester - III"<?php if($exam1 == 'Semester - III'){ echo 'selected="selected"';} ?>>Semester - III</option>
  <option value="Semester - IV"<?php if($exam1 == 'Semester - IV'){ echo 'selected="selected"';} ?>>Semester - IV</option>
  <option value="Semester - V"<?php if($exam1 == 'Semester - V'){ echo 'selected="selected"';} ?>>Semester - V</option>
  <option value="Semester - VI"<?php if($exam1 == 'Semester - VI'){ echo 'selected="selected"';} ?>>Semester - VI</option>
</select>
</td>
<td>
<input style="font-size:12pt" type="text" size="20" maxlength="20" name="passing_year1" placeholder="E.g. January 2001" value="<?php echo $passing_year1 ?>">
</td>
<td>
<select name="class1" size="1">
  <option value="">---Select your Class---</option>
  <option value="Distinction"<?php if($class1 == 'Distinction'){ echo 'selected="selected"';} ?>>Distinction</option>
  <option value="First"<?php if($class1 == 'First'){ echo 'selected="selected"';} ?>>First</option>
  <option value="Second"<?php if($class1 == 'Second'){ echo 'selected="selected"';} ?>>Second</option>
  <option value="Pass"<?php if($class1 == 'Pass'){ echo 'selected="selected"';} ?>>Pass</option>
</select>
</td>
<td>
<input style="font-size:12pt" type="text" size="20" maxlength="5" name="percentage1" value="<?php echo $percentage1 ?>">
</td>
<td>
<input style="font-size:12pt" type="text" size="20" maxlength="30" name="uni1" value="<?php echo $uni1 ?>">
</td>
</tr>
<tr>
<th>2</th>
<td>
<select name="exam2" size="1">
  <option value="">---Select your Exam---</option>
  <option value="S.S.C."<?php if($exam2 == 'S.S.C.'){ echo 'selected="selected"';} ?>>S.S.C.</option>
  <option value="H.S.C."<?php if($exam2 == 'H.S.C.'){ echo 'selected="selected"';} ?>>H.S.C.</option>
  <option value="Diploma"<?php if($exam2 == 'Diploma'){ echo 'selected="selected"';} ?>>Diploma</option>
  <option value="Semester - I"<?php if($exam2 == 'Semester - I'){ echo 'selected="selected"';} ?>>Semester - I</option>
  <option value="Semester - II"<?php if($exam2 == 'Semester - II'){ echo 'selected="selected"';} ?>>Semester - II</option>
  <option value="Semester - III"<?php if($exam2 == 'Semester - III'){ echo 'selected="selected"';} ?>>Semester - III</option>
  <option value="Semester - IV"<?php if($exam2 == 'Semester - IV'){ echo 'selected="selected"';} ?>>Semester - IV</option>
  <option value="Semester - V"<?php if($exam2 == 'Semester - V'){ echo 'selected="selected"';} ?>>Semester - V</option>
  <option value="Semester - VI"<?php if($exam2 == 'Semester - VI'){ echo 'selected="selected"';} ?>>Semester - VI</option>
</select>
</td>
<td>
<input style="font-size:12pt" type="text" size="20" maxlength="20" name="passing_year2" placeholder="E.g. January 2001" value="<?php echo $passing_year2 ?>">
</td>
<td>
<select name="class2" size="1">
  <option value="">---Select your Class---</option>
  <option value="Distinction"<?php if($class2 == 'Distinction'){ echo 'selected="selected"';} ?>>Distinction</option>
  <option value="First"<?php if($class2 == 'First'){ echo 'selected="selected"';} ?>>First</option>
  <option value="Second"<?php if($class2 == 'Second'){ echo 'selected="selected"';} ?>>Second</option>
  <option value="Pass"<?php if($class2 == 'Pass'){ echo 'selected="selected"';} ?>>Pass</option>
</select>
</td>
<td>
<input style="font-size:12pt" type="text" size="20" maxlength="5" name="percentage2" value="<?php echo $percentage2 ?>">
</td>
<td>
<input style="font-size:12pt" type="text" size="20" maxlength="30" name="uni2" value="<?php echo $uni2 ?>">
</td>
</tr>
<tr>
<th>3</th>
<td>
<select name="exam3" size="1">
  <option value="">---Select your Exam---</option>
  <option value="S.S.C."<?php if($exam3 == 'S.S.C.'){ echo 'selected="selected"';} ?>>S.S.C.</option>
  <option value="H.S.C."<?php if($exam3 == 'H.S.C.'){ echo 'selected="selected"';} ?>>H.S.C.</option>
  <option value="Diploma"<?php if($exam3 == 'Diploma'){ echo 'selected="selected"';} ?>>Diploma</option>
  <option value="Semester - I"<?php if($exam3 == 'Semester - I'){ echo 'selected="selected"';} ?>>Semester - I</option>
  <option value="Semester - II"<?php if($exam3 == 'Semester - II'){ echo 'selected="selected"';} ?>>Semester - II</option>
  <option value="Semester - III"<?php if($exam3 == 'Semester - III'){ echo 'selected="selected"';} ?>>Semester - III</option>
  <option value="Semester - IV"<?php if($exam3 == 'Semester - IV'){ echo 'selected="selected"';} ?>>Semester - IV</option>
  <option value="Semester - V"<?php if($exam3 == 'Semester - V'){ echo 'selected="selected"';} ?>>Semester - V</option>
  <option value="Semester - VI"<?php if($exam3 == 'Semester - VI'){ echo 'selected="selected"';} ?>>Semester - VI</option>
</select>
</td>
<td>
<input style="font-size:12pt" type="text" size="20" maxlength="20" name="passing_year3" placeholder="E.g. January 2001" value="<?php echo $passing_year3 ?>">
</td>
<td>
<select name="class3" size="1">
  <option value="">---Select your Class---</option>
  <option value="Distinction"<?php if($class3 == 'Distinction'){ echo 'selected="selected"';} ?>>Distinction</option>
  <option value="First"<?php if($class3 == 'First'){ echo 'selected="selected"';} ?>>First</option>
  <option value="Second"<?php if($class3 == 'Second'){ echo 'selected="selected"';} ?>>Second</option>
  <option value="Pass"<?php if($class3 == 'Pass'){ echo 'selected="selected"';} ?>>Pass</option>
</select>
</td>
<td>
<input style="font-size:12pt" type="text" size="20" maxlength="5" name="percentage3" value="<?php echo $percentage3 ?>">
</td>
<td>
<input style="font-size:12pt" type="text" size="20" maxlength="20" name="uni3" value="<?php echo $uni3 ?>">
</td>
</tr>
<tr>
<th>4</th>
<td>
<select name="exam4" size="1">
  <option value="">---Select your Exam---</option>
  <option value="S.S.C."<?php if($exam4 == 'S.S.C.'){ echo 'selected="selected"';} ?>>S.S.C.</option>
  <option value="H.S.C."<?php if($exam4 == 'H.S.C.'){ echo 'selected="selected"';} ?>>H.S.C.</option>
  <option value="Diploma"<?php if($exam4 == 'Diploma'){ echo 'selected="selected"';} ?>>Diploma</option>
  <option value="Semester - I"<?php if($exam4 == 'Semester - I'){ echo 'selected="selected"';} ?>>Semester - I</option>
  <option value="Semester - II"<?php if($exam4 == 'Semester - II'){ echo 'selected="selected"';} ?>>Semester - II</option>
  <option value="Semester - III"<?php if($exam4 == 'Semester - III'){ echo 'selected="selected"';} ?>>Semester - III</option>
  <option value="Semester - IV"<?php if($exam4 == 'Semester - IV'){ echo 'selected="selected"';} ?>>Semester - IV</option>
  <option value="Semester - V"<?php if($exam4 == 'Semester - V'){ echo 'selected="selected"';} ?>>Semester - V</option>
  <option value="Semester - VI"<?php if($exam4 == 'Semester - VI'){ echo 'selected="selected"';} ?>>Semester - VI</option>
</select>
</td>
<td>
<input style="font-size:12pt" type="text" size="20" maxlength="20" name="passing_year4" placeholder="E.g. January 2001" value="<?php echo $passing_year4 ?>">
</td>
<td>
<select name="class4" size="1">
  <option value="">---Select your Class---</option>
  <option value="Distinction"<?php if($class4 == 'Distinction'){ echo 'selected="selected"';} ?>>Distinction</option>
  <option value="First"<?php if($class4 == 'First'){ echo 'selected="selected"';} ?>>First</option>
  <option value="Second"<?php if($class4 == 'Second'){ echo 'selected="selected"';} ?>>Second</option>
  <option value="Pass"<?php if($class4 == 'Pass'){ echo 'selected="selected"';} ?>>Pass</option>
</select>
</td>
<td>
<input style="font-size:12pt" type="text" size="20" maxlength="5" name="percentage4" value="<?php echo $percentage4 ?>">
</td>
<td>
<input style="font-size:12pt" type="text" size="20" maxlength="20" name="uni4" value="<?php echo $uni4 ?>">
</td>
</tr>
<tr>
<th>5</th>
<td>
<select name="exam5" size="1">
  <option value="">---Select your Exam---</option>
  <option value="S.S.C."<?php if($exam5 == 'S.S.C.'){ echo 'selected="selected"';} ?>>S.S.C.</option>
  <option value="H.S.C."<?php if($exam5 == 'H.S.C.'){ echo 'selected="selected"';} ?>>H.S.C.</option>
  <option value="Diploma"<?php if($exam5 == 'Diploma'){ echo 'selected="selected"';} ?>>Diploma</option>
  <option value="Semester - I"<?php if($exam5 == 'Semester - I'){ echo 'selected="selected"';} ?>>Semester - I</option>
  <option value="Semester - II"<?php if($exam5 == 'Semester - II'){ echo 'selected="selected"';} ?>>Semester - II</option>
  <option value="Semester - III"<?php if($exam5 == 'Semester - III'){ echo 'selected="selected"';} ?>>Semester - III</option>
  <option value="Semester - IV"<?php if($exam5 == 'Semester - IV'){ echo 'selected="selected"';} ?>>Semester - IV</option>
  <option value="Semester - V"<?php if($exam5 == 'Semester - V'){ echo 'selected="selected"';} ?>>Semester - V</option>
  <option value="Semester - VI"<?php if($exam5 == 'Semester - VI'){ echo 'selected="selected"';} ?>>Semester - VI</option>
</select>
</td>
<td>
<input style="font-size:12pt" type="text" size="20" maxlength="20" name="passing_year5" placeholder="E.g. January 2001" value="<?php echo $passing_year5 ?>">
</td>
<td>
<select name="class5" size="1">
  <option value="">---Select your Class---</option>
  <option value="Distinction"<?php if($class5 == 'Distinction'){ echo 'selected="selected"';} ?>>Distinction</option>
  <option value="First"<?php if($class5 == 'First'){ echo 'selected="selected"';} ?>>First</option>
  <option value="Second"<?php if($class5 == 'Second'){ echo 'selected="selected"';} ?>>Second</option>
  <option value="Pass"<?php if($class5 == 'Pass'){ echo 'selected="selected"';} ?>>Pass</option>
</select>
</td>
<td>
<input style="font-size:12pt" type="text" size="20" maxlength="5" name="percentage5" value="<?php echo $percentage5 ?>">
</td>
<td>
<input style="font-size:12pt" type="text" size="20" maxlength="20" name="uni5" value="<?php echo $uni5 ?>">
</td>
</tr>
<tr>
<th>6</th>
<td>
<select name="exam6" size="1">
  <option value="">---Select your Exam---</option>
  <option value="S.S.C."<?php if($exam6 == 'S.S.C.'){ echo 'selected="selected"';} ?>>S.S.C.</option>
  <option value="H.S.C."<?php if($exam6 == 'H.S.C.'){ echo 'selected="selected"';} ?>>H.S.C.</option>
  <option value="Diploma"<?php if($exam6 == 'Diploma'){ echo 'selected="selected"';} ?>>Diploma</option>
  <option value="Semester - I"<?php if($exam6 == 'Semester - I'){ echo 'selected="selected"';} ?>>Semester - I</option>
  <option value="Semester - II"<?php if($exam6 == 'Semester - II'){ echo 'selected="selected"';} ?>>Semester - II</option>
  <option value="Semester - III"<?php if($exam6 == 'Semester - III'){ echo 'selected="selected"';} ?>>Semester - III</option>
  <option value="Semester - IV"<?php if($exam6 == 'Semester - IV'){ echo 'selected="selected"';} ?>>Semester - IV</option>
  <option value="Semester - V"<?php if($exam6 == 'Semester - V'){ echo 'selected="selected"';} ?>>Semester - V</option>
  <option value="Semester - VI"<?php if($exam6 == 'Semester - VI'){ echo 'selected="selected"';} ?>>Semester - VI</option>
</select>
</td>
<td>
<input style="font-size:12pt" type="text" size="20" maxlength="20" name="passing_year6" placeholder="E.g. January 2001" value="<?php echo $passing_year6 ?>">
</td>
<td>
<select name="class6" size="1">
  <option value="">---Select your Class---</option>
  <option value="Distinction"<?php if($class6 == 'Distinction'){ echo 'selected="selected"';} ?>>Distinction</option>
  <option value="First"<?php if($class6 == 'First'){ echo 'selected="selected"';} ?>>First</option>
  <option value="Second"<?php if($class6 == 'Second'){ echo 'selected="selected"';} ?>>Second</option>
  <option value="Pass"<?php if($class6 == 'Pass'){ echo 'selected="selected"';} ?>>Pass</option>
</select>
</td>
<td>
<input style="font-size:12pt" type="text" size="20" maxlength="5" name="percentage6" value="<?php echo $percentage6 ?>">
</td>
<td>
<input style="font-size:12pt" type="text" size="20" maxlength="20" name="uni6" value="<?php echo $uni6 ?>">
</td>
</tr>
<tr>
<th>7</th>
<td>
<select name="exam7" size="1">
  <option value="">---Select your Exam---</option>
  <option value="S.S.C."<?php if($exam7 == 'S.S.C.'){ echo 'selected="selected"';} ?>>S.S.C.</option>
  <option value="H.S.C."<?php if($exam7 == 'H.S.C.'){ echo 'selected="selected"';} ?>>H.S.C.</option>
  <option value="Diploma"<?php if($exam7 == 'Diploma'){ echo 'selected="selected"';} ?>>Diploma</option>
  <option value="Semester - I"<?php if($exam7 == 'Semester - I'){ echo 'selected="selected"';} ?>>Semester - I</option>
  <option value="Semester - II"<?php if($exam7 == 'Semester - II'){ echo 'selected="selected"';} ?>>Semester - II</option>
  <option value="Semester - III"<?php if($exam7 == 'Semester - III'){ echo 'selected="selected"';} ?>>Semester - III</option>
  <option value="Semester - IV"<?php if($exam7 == 'Semester - IV'){ echo 'selected="selected"';} ?>>Semester - IV</option>
  <option value="Semester - V"<?php if($exam7 == 'Semester - V'){ echo 'selected="selected"';} ?>>Semester - V</option>
  <option value="Semester - VI"<?php if($exam7 == 'Semester - VI'){ echo 'selected="selected"';} ?>>Semester - VI</option>
</select>
</td>
<td>
<input style="font-size:12pt" type="text" size="20" maxlength="20" name="passing_year7" placeholder="E.g. January 2001" value="<?php echo $passing_year7 ?>">
</td>
<td>
<select name="class7" size="1">
  <option value="">---Select your Class---</option>
  <option value="Distinction"<?php if($class7 == 'Distinction'){ echo 'selected="selected"';} ?>>Distinction</option>
  <option value="First"<?php if($class7 == 'First'){ echo 'selected="selected"';} ?>>First</option>
  <option value="Second"<?php if($class7 == 'Second'){ echo 'selected="selected"';} ?>>Second</option>
  <option value="Pass"<?php if($class7 == 'Pass'){ echo 'selected="selected"';} ?>>Pass</option>
</select>
</td>
<td>
<input style="font-size:12pt" type="text" size="20" maxlength="5" name="percentage7" value="<?php echo $percentage7 ?>">
</td>
<td>
<input style="font-size:12pt" type="text" size="20" maxlength="20" name="uni7" value="<?php echo $uni7 ?>">
</td>
</tr>
<tr>
<th>8</th>
<td>
<select name="exam8" size="1">
  <option value="">---Select your Exam---</option>
  <option value="S.S.C."<?php if($exam8 == 'S.S.C.'){ echo 'selected="selected"';} ?>>S.S.C.</option>
  <option value="H.S.C."<?php if($exam8 == 'H.S.C.'){ echo 'selected="selected"';} ?>>H.S.C.</option>
  <option value="Diploma"<?php if($exam8 == 'Diploma'){ echo 'selected="selected"';} ?>>Diploma</option>
  <option value="Semester - I"<?php if($exam8 == 'Semester - I'){ echo 'selected="selected"';} ?>>Semester - I</option>
  <option value="Semester - II"<?php if($exam8 == 'Semester - II'){ echo 'selected="selected"';} ?>>Semester - II</option>
  <option value="Semester - III"<?php if($exam8 == 'Semester - III'){ echo 'selected="selected"';} ?>>Semester - III</option>
  <option value="Semester - IV"<?php if($exam8 == 'Semester - IV'){ echo 'selected="selected"';} ?>>Semester - IV</option>
  <option value="Semester - V"<?php if($exam8 == 'Semester - V'){ echo 'selected="selected"';} ?>>Semester - V</option>
  <option value="Semester - VI"<?php if($exam8 == 'Semester - VI'){ echo 'selected="selected"';} ?>>Semester - VI</option>
</select>
</td>
<td>
<input style="font-size:12pt" type="text" size="20" maxlength="20" name="passing_year8" placeholder="E.g. January 2001" value="<?php echo $passing_year8 ?>">
</td>
<td>
<select name="class8" size="1">
  <option value="">---Select your Class---</option>
  <option value="Distinction"<?php if($class8 == 'Distinction'){ echo 'selected="selected"';} ?>>Distinction</option>
  <option value="First"<?php if($class8 == 'First'){ echo 'selected="selected"';} ?>>First</option>
  <option value="Second"<?php if($class8 == 'Second'){ echo 'selected="selected"';} ?>>Second</option>
  <option value="Pass"<?php if($class8 == 'Pass'){ echo 'selected="selected"';} ?>>Pass</option>
</select>
</td>
<td>
<input style="font-size:12pt" type="text" size="20" maxlength="5" name="percentage8" value="<?php echo $percentage8 ?>">
</td>
<td>
<input style="font-size:12pt" type="text" size="20" maxlength="20" name="uni8" value="<?php echo $uni8 ?>">
</td>
</tr>
</table>
<table>
<tr><th colspan="6"><input type="button" class="button" onclick="prevj()" name="prev" value="Previous">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" class="button" onclick="nextj()" name="next" value="Next">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" class="button" name="submit" value="Save & Next">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" class="button" name="reset" value="Reset"></th></tr>
</table>
</center>
</span>
</form>
</div>
</body>
</html>