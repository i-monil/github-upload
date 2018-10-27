<html xmlns:v="urn:schemas-microsoft-com:vml">
<html xmlns:v="urn:schemas-microsoft-com:vml"
xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:dt="uuid:C2F41010-65B3-11d1-A29F-00AA00C14882"
xmlns="http://www.w3.org/TR/REC-html40">
<?php
$emp_no = '';
$pass = '';
if (isset($_COOKIE['emp_no'])) 
  {
    $emp_no = $_COOKIE['emp_no'];
  }
  if (isset($_COOKIE['pass'])) 
  {
    $pass = $_COOKIE['pass'];
  }
?>
<?php
include('f_login.php'); // Includes Login Script
if(isset($_SESSION['emp_no'])){
header("location: faculty.php?s=");
}
?>
<head>
<script>
function capital()
{
form.emp_no.value=form.emp_no.value.toUpperCase();
}
</script>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<!--[if !mso]>
<style>
v\:* {behavior:url(#default#VML);}
o\:* {behavior:url(#default#VML);}
b\:* {behavior:url(#default#VML);}
.shape {behavior:url(#default#VML);}
</style>
<![endif]-->
<title>Shah and Anchor Kutchhi Engineering College - Online Portal(Faculty)</title>
<style>
.button {
  padding: 10px 10px;
  font-size:16px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
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
@page
	{size:8.-2059in 11.2232in;}
-->
</style>
</head>

<body link=purple vlink=navy style='margin:0' onload='document.form1.emp_no.focus()'>

<div style='position:absolute;width:14.-2249in;height:11.0553in'>
<![if !pub]>

<form name="form1" action="" method="post" enctype="multipart/form-data">
<![endif]><!--[if gte vml 1]><v:rect id="_x0000_s1198" style='position:absolute;
 left:.27pt;top:.23pt;width:1024.23pt;height:143.77pt;z-index:105;visibility:visible;
 mso-wrap-edited:f;mso-wrap-distance-left:2.88pt;mso-wrap-distance-top:2.88pt;
 mso-wrap-distance-right:2.88pt;mso-wrap-distance-bottom:2.88pt' fillcolor="#9c9 [2]"
 stroked="f" strokecolor="black [0]" strokeweight="0" o:cliptowrap="t">
 <v:fill color2="white [7]"/>
 <v:stroke>
  <o:left v:ext="view" color="black [0]" color2="white [7]"/>
  <o:top v:ext="view" color="black [0]" color2="white [7]"/>
  <o:right v:ext="view" color="black [0]" color2="white [7]"/>
  <o:bottom v:ext="view" color="black [0]" color2="white [7]"/>
  <o:column v:ext="view" color="black [0]" color2="white [7]"/>
 </v:stroke>
 <v:shadow color="#ccc [4]"/>
 <v:path insetpenok="f"/>
 <o:lock v:ext="edit" shapetype="t"/>
 <v:textbox inset="2.88pt,2.88pt,2.88pt,2.88pt"/>
</v:rect><![endif]--><![if !vml]><span style='position:absolute;z-index:105;
left:0px;top:0px;width:1366px;height:192px'><img width=1366 height=192
src=image499.png v:shapes="_x0000_s1198"></span><![endif]><!--[if gte vml 1]><v:rect
 id="_x0000_s1199" style='position:absolute;left:130.46pt;top:108.32pt;width:47.02pt;
 height:81pt;z-index:106;visibility:visible;mso-wrap-edited:f;
 mso-wrap-distance-left:2.88pt;mso-wrap-distance-top:2.88pt;
 mso-wrap-distance-right:2.88pt;mso-wrap-distance-bottom:2.88pt' fillcolor="white [7]"
 stroked="f" strokecolor="black [0]" o:cliptowrap="t">
 <v:stroke color2="white [7]">
  <o:left v:ext="view" color="black [0]" color2="white [7]"/>
  <o:top v:ext="view" color="black [0]" color2="white [7]"/>
  <o:right v:ext="view" color="black [0]" color2="white [7]"/>
  <o:bottom v:ext="view" color="black [0]" color2="white [7]"/>
  <o:column v:ext="view" color="black [0]" color2="white [7]"/>
 </v:stroke>
 <v:shadow color="#ccc [4]"/>
 <v:path insetpenok="f"/>
 <o:lock v:ext="edit" shapetype="t"/>
 <v:textbox inset="2.88pt,2.88pt,2.88pt,2.88pt"/>
</v:rect><![endif]--><![if !vml]><span style='position:absolute;z-index:106;
left:174px;top:144px;width:63px;height:108px'><img width=63 height=108
src=image500.png v:shapes="_x0000_s1199"></span><![endif]><!--[if gte vml 1]><v:rect
 id="_x0000_s1200" style='position:absolute;left:0;top:75.32pt;width:130.82pt;
 height:787.18pt;z-index:107;visibility:visible;mso-wrap-edited:f;
 mso-wrap-distance-left:2.88pt;mso-wrap-distance-top:2.88pt;
 mso-wrap-distance-right:2.88pt;mso-wrap-distance-bottom:2.88pt' fillcolor="#9c9 [2]"
 stroked="f" strokecolor="black [0]" strokeweight="0" o:cliptowrap="t">
 <v:fill color2="white [7]"/>
 <v:stroke>
  <o:left v:ext="view" color="black [0]" color2="white [7]"/>
  <o:top v:ext="view" color="black [0]" color2="white [7]"/>
  <o:right v:ext="view" color="black [0]" color2="white [7]"/>
  <o:bottom v:ext="view" color="black [0]" color2="white [7]"/>
  <o:column v:ext="view" color="black [0]" color2="white [7]"/>
 </v:stroke>
 <v:shadow color="#ccc [4]"/>
 <v:path insetpenok="f"/>
 <o:lock v:ext="edit" shapetype="t"/>
 <v:textbox inset="2.88pt,2.88pt,2.88pt,2.88pt"/>
</v:rect><![endif]--><![if !vml]><span style='position:absolute;z-index:107;
left:0px;top:100px;width:174px;height:1050px'><img width=174 height=1050
src=image501.png v:shapes="_x0000_s1200"></span><![endif]><!--[if gte vml 1]><v:roundrect
 id="_x0000_s1201" style='position:absolute;left:129.83pt;top:54.88pt;width:943.42pt;
 height:108pt;z-index:108;visibility:visible;mso-wrap-edited:f;
 mso-wrap-distance-left:2.88pt;mso-wrap-distance-top:2.88pt;
 mso-wrap-distance-right:2.88pt;mso-wrap-distance-bottom:2.88pt' arcsize=".5"
 fillcolor="white [7]" stroked="f" strokecolor="black [0]" strokeweight="0"
 o:cliptowrap="t">
 <v:fill color2="white [7]"/>
 <v:stroke>
  <o:left v:ext="view" color="black [0]" color2="white [7]"/>
  <o:top v:ext="view" color="black [0]" color2="white [7]"/>
  <o:right v:ext="view" color="black [0]" color2="white [7]"/>
  <o:bottom v:ext="view" color="black [0]" color2="white [7]"/>
  <o:column v:ext="view" color="black [0]" color2="white [7]"/>
 </v:stroke>
 <v:shadow color="#ccc [4]"/>
 <v:path insetpenok="f"/>
 <o:lock v:ext="edit" shapetype="t"/>
 <v:textbox inset="2.88pt,2.88pt,2.88pt,2.88pt"/>
</v:roundrect><![endif]--><![if !vml]><span style='position:absolute;
z-index:108;left:173px;top:73px;width:1258px;height:145px'><img width=1258
height=145 src=image502.png v:shapes="_x0000_s1201"></span><![endif]><!--[if gte vml 1]><v:roundrect
 id="_x0000_s1202" style='position:absolute;left:222pt;top:0;width:582pt;
 height:54pt;z-index:109;visibility:visible;mso-wrap-edited:f;
 mso-wrap-distance-left:2.88pt;mso-wrap-distance-top:2.88pt;
 mso-wrap-distance-right:2.88pt;mso-wrap-distance-bottom:2.88pt' arcsize=".5"
 fillcolor="navy [1]" stroked="f" strokecolor="white [7]" strokeweight="0"
 o:cliptowrap="t">
 <v:fill color2="white [7]"/>
 <v:stroke>
  <o:left v:ext="view" color="black [0]" color2="white [7]"/>
  <o:top v:ext="view" color="black [0]" color2="white [7]"/>
  <o:right v:ext="view" color="black [0]" color2="white [7]"/>
  <o:bottom v:ext="view" color="black [0]" color2="white [7]"/>
  <o:column v:ext="view" color="black [0]" color2="white [7]"/>
 </v:stroke>
 <v:shadow color="#ccc [4]"/>
 <v:path insetpenok="f"/>
 <o:lock v:ext="edit" shapetype="t"/>
 <v:textbox inset="2.88pt,2.88pt,2.88pt,2.88pt"/>
</v:roundrect><![endif]--><![if !vml]><span style='position:absolute;
z-index:109;left:296px;top:0px;width:776px;height:72px'><img width=776
height=72 src=image503.png v:shapes="_x0000_s1202"></span><![endif]><!--[if gte vml 1]><v:shapetype
 id="_x0000_t202" coordsize="21600,21600" o:spt="202" path="m,l,21600r21600,l21600,xe">
 <v:stroke joinstyle="miter"/>
 <v:path gradientshapeok="t" o:connecttype="rect"/>
</v:shapetype><v:shape id="_x0000_s1203" type="#_x0000_t202" style='position:absolute;
 left:246pt;top:2.48pt;width:534pt;height:45pt;z-index:110;visibility:visible;
 mso-wrap-edited:f;mso-wrap-distance-left:2.88pt;mso-wrap-distance-top:2.88pt;
 mso-wrap-distance-right:2.88pt;mso-wrap-distance-bottom:2.88pt' filled="f"
 fillcolor="black [0]" stroked="f" strokecolor="black [0]" strokeweight="0"
 o:cliptowrap="t">
 <v:fill color2="white [7]"/>
 <v:stroke>
  <o:left v:ext="view" color="black [0]" weight="0" joinstyle="miter"/>
  <o:top v:ext="view" color="black [0]" weight="0" joinstyle="miter"/>
  <o:right v:ext="view" color="black [0]" weight="0" joinstyle="miter"/>
  <o:bottom v:ext="view" color="black [0]" weight="0" joinstyle="miter"/>
  <o:column v:ext="view" color="black [0]" color2="white [7]"/>
 </v:stroke>
 <v:shadow color="#ccc [4]"/>
 <v:path insetpenok="f"/>
 <o:lock v:ext="edit" shapetype="t"/>
 <v:textbox style='mso-column-margin:5.7pt' inset="2.85pt,2.85pt,2.85pt,2.85pt"/>
</v:shape><![endif]--><![if !vml]><span style='position:absolute;z-index:110;
left:328px;top:3px;width:712px;height:60px'>

<table cellpadding=0 cellspacing=0>
 <tr>
  <td width=712 height=60 valign=middle style='vertical-align:top'><![endif]>
  <div v:shape="_x0000_s1203" style='padding:8.6249pt 2.85pt 2.85pt 2.85pt'
  class=shape>
  <p class=MsoOrganizationName><span lang=en-US style='font-size:24.0pt;
  font-family:Ubuntu;language:en-US'>Shah and Anchor Kutchhi Engineering College</span></p>
  </div>
  <![if !vml]></td>
 </tr>
</table>

</span><![endif]><!--[if gte vml 1]><v:shape id="_x0000_s1204" type="#_x0000_t202"
 style='position:absolute;left:384pt;top:54pt;width:258.27pt;height:20.25pt;
 z-index:111;visibility:visible;mso-wrap-edited:f;mso-wrap-distance-left:2.88pt;
 mso-wrap-distance-top:2.88pt;mso-wrap-distance-right:2.88pt;
 mso-wrap-distance-bottom:2.88pt' filled="f" fillcolor="black [0]" stroked="f"
 strokecolor="black [0]" strokeweight="0" o:cliptowrap="t">
 <v:fill color2="white [7]"/>
 <v:stroke>
  <o:left v:ext="view" color="black [0]" color2="white [7]"/>
  <o:top v:ext="view" color="black [0]" color2="white [7]"/>
  <o:right v:ext="view" color="black [0]" color2="white [7]"/>
  <o:bottom v:ext="view" color="black [0]" color2="white [7]"/>
  <o:column v:ext="view" color="black [0]" color2="white [7]"/>
 </v:stroke>
 <v:shadow color="#ccc [4]"/>
 <v:path insetpenok="f"/>
 <o:lock v:ext="edit" shapetype="t"/>
 <v:textbox style='mso-column-margin:5.7pt' inset="2.85pt,2.85pt,2.85pt,2.85pt"/>
</v:shape><![endif]--><![if !vml]><span style='position:absolute;z-index:111;
left:512px;top:72px;width:344px;height:27px'>

<table cellpadding=0 cellspacing=0>
 <tr>
  <td width=344 height=27 style='vertical-align:top'><![endif]>
  <div v:shape="_x0000_s1204" style='padding:2.85pt 2.85pt 2.85pt 2.85pt'
  class=shape>
  <p class=MsoTagline><span lang=en-US style='font-size:14.0pt;line-height:
  100%;font-family:Ubuntu;font-weight:bold;language:en-US'>Admission Portal </span></p>
  </div>
  <![if !vml]></td>
 </tr>
</table>

</span><![endif]><!--[if gte vml 1]><v:shape id="_x0000_s1205" type="#_x0000_t202"
 style='position:absolute;left:297.93pt;top:1in;width:417.03pt;height:66.43pt;
 z-index:112;visibility:visible;mso-wrap-edited:f;mso-wrap-distance-left:2.88pt;
 mso-wrap-distance-top:2.88pt;mso-wrap-distance-right:2.88pt;
 mso-wrap-distance-bottom:2.88pt' filled="f" fillcolor="black [0]" stroked="f"
 strokecolor="#9c9 [2]" strokeweight="0" o:cliptowrap="t">
 <v:fill color2="white [7]"/>
 <v:stroke dashstyle="dash">
  <o:left v:ext="view" color="black [0]" color2="white [7]"/>
  <o:top v:ext="view" color="black [0]" color2="white [7]"/>
  <o:right v:ext="view" color="black [0]" color2="white [7]"/>
  <o:bottom v:ext="view" color="black [0]" color2="white [7]"/>
  <o:column v:ext="view" color="black [0]" color2="white [7]"/>
 </v:stroke>
 <v:shadow color="#ccc [4]"/>
 <v:path insetpenok="f"/>
 <o:lock v:ext="edit" shapetype="t"/>
 <v:textbox style='mso-column-margin:5.7pt' inset="2.85pt,2.85pt,2.85pt,2.85pt"/>
</v:shape><![endif]--><![if !vml]><span style='position:absolute;z-index:112;
left:397px;top:96px;width:556px;height:89px'>

<table cellpadding=0 cellspacing=0>
 <tr>
  <td width=556 height=89 style='vertical-align:top'><![endif]>
  <div v:shape="_x0000_s1205" style='padding:2.85pt 2.85pt 2.85pt 2.85pt'
  class=shape>
  <p class=MsoTitle3 style='text-align:center;text-align:center'><span
  lang=en-US style='font-family:Ubuntu;language:en-US'>Faculty Section</span></p>
  <p class=MsoTitle3 style='text-align:center;text-align:center'><span
  lang=en-US style='font-size:14.0pt;line-height:100%;font-family:Ubuntu;
  language:en-US'></span></p>
  </div>
  <![if !vml]></td>
 </tr>
</table>

</span><![endif]><!--[if gte vml 1]><v:shape id="_x0000_s1206" type="#_x0000_t202"
 style='position:absolute;left:165.72pt;top:145.86pt;width:782.28pt;height:34.81pt;
 z-index:113;visibility:visible;mso-wrap-edited:f;mso-wrap-distance-left:2.88pt;
 mso-wrap-distance-top:2.88pt;mso-wrap-distance-right:2.88pt;
 mso-wrap-distance-bottom:2.88pt' filled="f" fillcolor="black [0]" stroked="f"
 strokecolor="#9c9 [2]" strokeweight="0" o:cliptowrap="t">
 <v:fill color2="white [7]"/>
 <v:stroke dashstyle="dash">
  <o:left v:ext="view" color="black [0]" color2="white [7]"/>
  <o:top v:ext="view" color="black [0]" color2="white [7]"/>
  <o:right v:ext="view" color="black [0]" color2="white [7]"/>
  <o:bottom v:ext="view" color="black [0]" color2="white [7]"/>
  <o:column v:ext="view" color="black [0]" color2="white [7]"/>
 </v:stroke>
 <v:shadow color="#ccc [4]"/>
 <v:path insetpenok="f"/>
 <o:lock v:ext="edit" shapetype="t"/>
 <v:textbox style='mso-column-margin:5.7pt' inset="2.85pt,2.85pt,2.85pt,2.85pt"/>
</v:shape><![endif]--><![if !vml]><span style='position:absolute;z-index:113;
left:221px;top:194px;width:1043px;height:47px'>

<table cellpadding=0 cellspacing=0>
 <tr>
  <td width=1043 height=47 style='vertical-align:top'><![endif]>
  <div v:shape="_x0000_s1206" style='padding:2.85pt 2.85pt 2.85pt 2.85pt'
  class=shape>
  <p class=MsoBodyText3 style='text-align:center;text-align:center'><span
  lang=en-US style='font-size:12.0pt;font-family:Arial;color:red;language:en-US'></span></p>
  <p class=MsoBodyText3 style='text-align:center;text-align:center'><span
  lang=en-US style='font-size:12.0pt;font-family:Arial;color:red;language:en-US'></span></p>
  <p class=MsoBodyText3 style='text-align:center;text-align:center'><span
  lang=en-US style='font-size:12.0pt;font-family:Arial;color:red;language:en-US'></span></p>
  </div>
  <![if !vml]></td>
 </tr>
</table>



<table cellpadding=0 cellspacing=0  align="center" background="image635.png">
<tr><td><br></td><td><br></td></tr>
 <tr>
  <td width=300 height=47 style='vertical-align:center'><![endif]>
  <p class=MsoBodyText3 style='text-align:center;text-align:center'><span
  lang=en-US style='font-size:12.0pt;font-family:Arial;color:black;language:en-US'><strong>Employee Number</strong></span></p>
  <![if !vml]>
  </td>
  <td width=300 height=47 style='vertical-align:center'><![endif]>
  <p class=MsoBodyText3 style='text-align:center;text-align:center'><span
  lang=en-US style='font-size:12.0pt;font-family:Arial;color:black;language:en-US'><input type="text" size="20" placeholder="Enter Employee Number" maxlength="4" name="emp_no" onblur="capital()" value="<?php echo $emp_no ?>"></span></p>
  <![if !vml]>
  </td>
 </tr>
 <tr>
  <td width=300 height=47 style='vertical-align:center'><![endif]>
  <p class=MsoBodyText3 style='text-align:center;text-align:center'><span
  lang=en-US style='font-size:12.0pt;font-family:Arial;color:black;language:en-US'><strong>Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></span></p>
  <![if !vml]>
  </td>
  <td width=300 height=47 style='vertical-align:center'><![endif]>
  <p class=MsoBodyText3 style='text-align:center;text-align:center'><span
  lang=en-US style='font-size:12.0pt;font-family:Arial;color:black;language:en-US'><input type="password" placeholder="Enter Password" size="20" maxlength="20" name="pass" value="<?php echo $pass ?>"></span></p>
  <![if !vml]>
  </td>
 </tr>
 <tr>
  <td width=300 height=47 style='vertical-align:center'><![endif]>
  <p class=MsoBodyText3 style='text-align:center;text-align:center'><span
  lang=en-US style='font-size:12.0pt;font-family:Arial;color:black;language:en-US'><input type="checkbox" name="remember">Remember Me for 30 days</span></p>
  <![if !vml]>
  </td>
  <td width=300 height=47 style='vertical-align:center'><![endif]>
  <p class=MsoBodyText3 style='text-align:center;text-align:center'><span
  lang=en-US style='font-size:12.0pt;font-family:Arial;color:black;language:en-US'><a href="forgot.php">Forget Password</a></span></p>
  <![if !vml]>
  </td>
 </tr>
 <tr>
  <td width=300 height=47 style='vertical-align:center'><![endif]>
  <p class=MsoBodyText3 style='text-align:center;text-align:center'><span
  lang=en-US style='font-size:12.0pt;font-family:Arial;color:black;language:en-US'><a href="fsignup.php">Sign Up</a></span></p>
  <![if !vml]>
  </td>
  <td width=300 height=47 style='vertical-align:center'><![endif]>
  <p class=MsoBodyText3 style='text-align:center;text-align:center'><span
  lang=en-US style='font-size:12.0pt;font-family:Arial;color:black;language:en-US'><input type="submit" class="button" name="submit" value="Sign in">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" class="button" value="Reset"></span></p>
  <![if !vml]>
  </td>
 </tr>
</table>
<span style='position:absolute;z-index:15;
left:-220px;top:-200px;width:136px;height:136px'><img width=136 height=136
src=image5102.png>
<a href="http://www.shahandanchor.com" target="_blank"><input style="background-color:#99CC99;margin-left:10px" type="button" value="SAKEC HOME"></a></span>
<div style='position:absolute;margin-left:300px;margin-top:-300px;width:489px;
height:36px;z-index:227'><font face="Ubuntu" size=4pt color="red"><?php echo $error ?></font></div>
<![if !pub]></span><![endif]><![if !pub]>
</form>

<![endif]>
</div>
</body>
</html>