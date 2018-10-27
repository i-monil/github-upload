<?php
include('login.php');
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
else
	header("location: personal.php");
}
?>
<html xmlns:v="urn:schemas-microsoft-com:vml">
<html xmlns:v="urn:schemas-microsoft-com:vml"
xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:dt="uuid:C2F41010-65B3-11d1-A29F-00AA00C14882"
xmlns="http://www.w3.org/TR/REC-html40">
<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<link rel="icon" type="image/png" href="image5101.png">
<title>Shah and Anchor Kutchhi Engineering College - Admission Portal (Student)</title>
<script language=JavaScript>
function check()
{
	if(document.getElementById("reg_no").value =="")
	{
	alert("Registation Number Can not be balnk");
	return false;
	}
	if(document.getElementById("smart_card_no").value =="")
	{
	alert("Smart Card Number Can not be balnk");
	return false;
	}
return true;
}
function load()
{
document.getElementById("reg_no").focus();
}
</script>
<style>
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

<body onload="load()" link=purple vlink=navy style='margin:0'>

<div style='position:absolute;width:10.-2249in;height:5.0553in'>
<form name="form" action="" method="post" enctype="multipart/form-data">
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

<table cellpadding=0 cellspacing=0>
 <tr>
  <td width=1043 height=47 style='vertical-align:top'>
  <div v:shape="_x0000_s1206" style='padding:2.85pt 2.85pt 2.85pt 2.85pt'
  class=shape>
  <p class=MsoBodyText3 style='text-align:center;text-align:center'><span
  lang=en-US style='font-size:12.0pt;font-family:Arial;color:red;language:en-US'></span></p>
  <p class=MsoBodyText3 style='text-align:center;text-align:center'><span
  lang=en-US style='font-size:12.0pt;font-family:Arial;color:red;language:en-US'></span></p>
  <p class=MsoBodyText3 style='text-align:center;text-align:center'><span
  lang=en-US style='font-size:12.0pt;font-family:Arial;color:red;language:en-US'></span></p>
  </div>
  </td>
 </tr>
</table>
<span style='position:absolute;z-index:15;
left:-220px;top:-200px;width:136px;height:136px'><img width=136 height=136
src=image5102.png>
<a href="http://www.shahandanchor.com" target="_blank"><input style="background-color:#99CC99;margin-left:10px" type="button" value="SAKEC HOME"></a></span>
<center>
<div style="background-image: url(image635.png); height: 298px; width: 698px;">
</br></br><div><h2>LOGIN</h2></div>
<div><strong>Registration Number</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" maxlength="5" id="reg_no" name="reg_no" size="20"></div>
</br></br>
<div><strong>Smart Card Number</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" maxlength="12" id="smart_card_no" name="smart_card_no" size="20"></div>
</br></br>
<div><input type="submit" class="button" onclick="return check()" name="login" value="Login">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" class="button" name="reset" value="Reset"></div>
</div>
</center>
</span>
</form>
</div>

</body>

</html>