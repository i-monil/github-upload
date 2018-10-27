<html>
<?php include('retrieve-fprint.php'); ?>
<body link=purple vlink=navy style='margin:0'>
<div style='position:absolute;width:10.-2249in;height:5.0553in'>
<form name="form" action="" method="post" enctype="multipart/form-data">
<center>
<table class="border">
<tr><td colspan="3"><img src="sakec_logo.png"></td></tr>
<tr class="border"></tr>
<tr>
<td align="center"><table border="1" cellspacing="0" cellpadding="5"><tr><th>Registration Number:<u><?php echo $reg_no;?></u></th></tr></table></td>
<td align="center"><font size="5"><b><u>ENTRANCE FORM</u></br><?php echo $year?></br>Branch:<?php echo $branch?></br>Academic Year: 2017-18</b></font></td>
<td align="center"><img src="<?php echo $photo_path?>" width="150px" height="200px" alt="No Image"></td>
</tr>
<tr class="border"></tr>
<tr>
<th colspan="3"><u>FOR OFFICE USE ONLY</u></th>
</tr>
<tr>
<td>Roll Number:_____________________</td>
<td>Check By:________________________</td>
<td>ADMIT:___________________________</td>
</tr>
<tr>
<td>Fee Receipt No:__________________</td>
<td>Amount:Rs._______________________</td>
<td>Date:____________________________</td>
</tr>
<tr><th colspan="3"></br></th></tr>
<tr class="border"></tr>
<tr><td colspan="3">Students who are eligible to join <?php echo $year?> class as per University regulations are advised to supply the following information.</td></tr>
<tr><th colspan="3"></br></th></tr>
<tr><td colspan="3"><b>1. Full Name:&nbsp;&nbsp;&nbsp;</b><?php echo $full_name?></td></tr>
<tr><td colspan="3"><b>2. Postal Address for Correspondance:&nbsp;&nbsp;&nbsp;</b><?php echo $address?></td></tr>
<tr><td colspan="3"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Telephone:&nbsp;&nbsp;&nbsp;</b><?php echo $tel?></td></tr>
<tr><td colspan="3"><b>3. Date of Birth:&nbsp;&nbsp;&nbsp;</b><?php echo $bday?>&nbsp;&nbsp;&nbsp;<i><?php echo $dob_words?></i></td></tr>
<tr><td colspan="3"><b>4. (a) Gender:&nbsp;&nbsp;&nbsp;</b><?php echo $gender?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>(b) Marital Status:&nbsp;&nbsp;&nbsp;</b><?php echo $marital?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>(c) Mother Tongue:&nbsp;&nbsp;&nbsp;</b><?php echo $m_tongue?></td></tr>
<tr><td><b>5. Place of Birth:&nbsp;&nbsp;&nbsp;</b><?php echo $birth_place?></td><td colspan="2"><b>6. Nationality:&nbsp;&nbsp;&nbsp;</b><?php echo $nationality?></td></tr>
<tr><td><b>7. Religion:&nbsp;&nbsp;&nbsp;</b><?php echo $religion?></td><td colspan="2"><b>8. Categoty:&nbsp;&nbsp;&nbsp;</b><?php echo $category?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Cast:&nbsp;&nbsp;&nbsp;</b><?php echo $cast?></td></tr>
<tr><td colspan="3"><b>9. Have you received any scholarship during the last two years? If yes, give details:&nbsp;&nbsp;&nbsp;</b><?php echo $scholarship?></td></tr>
<tr><td colspan="3"><b>10. Name & Address of College/Institute Last Attended:&nbsp;&nbsp;&nbsp;</b><?php echo $last_insti?></td></tr>
<tr><td colspan="3"><b>11. Date of Admission of this College and Corresponding details:</td></tr>
<tr><td align="center" colspan="3">
<?php
if($year=='Second Year Engineering')
{
echo "<table cellspacing=0 cellpadding=3 border=1>";
echo "<tr><th>Class</th><th>Fee Receipt Number</th><th>Date</th><th>Amount</th></tr>";
echo "<tr><th>FE</th><th>$fe_fee_receipt</th><th>$fe_fee_date</th><th>$fe_fee_amount</th></tr>";
echo "</table>";
}
if($year=='Third Year Engineering')
{
echo "<table cellspacing=0 cellpadding=3  border=1>";
echo "<tr><th>Class</th><th>Fee Receipt Number</th><th>Date</th><th>Amount</th></tr>";
echo "<tr><th>FE</th><th>$fe_fee_receipt</th><th>$fe_fee_date</th><th>$fe_fee_amount</th></tr>";
echo "<tr><th>SE</th><th>$se_fee_receipt</th><th>$se_fee_date</th><th>$se_fee_amount</th></tr>";echo "</table>";
}
if($year=='Final Year Engineering')
{
echo "<table cellspacing=0 cellpadding=3  border=1>";
echo "<tr><th>Class</th><th>Fee Receipt Number</th><th>Date</th><th>Amount</th></tr>";
echo "<tr><th>FE</th><th>$fe_fee_receipt</th><th>$fe_fee_date</th><th>$fe_fee_amount</th></tr>";
echo "<tr><th>SE</th><th>$se_fee_receipt</th><th>$se_fee_date</th><th>$se_fee_amount</th></tr>";echo "</table>";
echo "<tr><th>TE</th><th>$te_fee_receipt</th><th>$te_fee_date</th><th>$te_fee_amount</th></tr>";echo "</table>";
}
?>
</td></tr>
<tr><td colspan="3"><b>12. Details of Examinations Passed from S.S.C. :</td></tr>
<tr><td align="center" colspan="3">
<?php
	include('dbconnect.php');
	echo "<table border=1 cellspacing=0 cellpadding=3>";
	echo "<tr><th>Sr. No.</th><th>Examination</th><th>Year of Passing</th><th>Class</th><th>Percentage</th><th>Name of School / College / Board / University</th></tr>";
	$i=1;
	$academics=mysqli_query($con, "select * from academics where reg_no='$reg_no'");
	while($row = mysqli_fetch_array($academics))
	{
		$exam=$row["exam"];
		$passing_year=$row["passing_year"];
		$class=$row["class"];
		$percentage=$row["percentage"];
		$uni=$row["uni"];
	echo "<tr><th>$i</th><td>$exam</td><td>$passing_year</td><td>$class</td><td>$percentage</td><td>$uni</td></tr>";
	$i++; 
	}
	echo "</table>";
?>
</td></tr>
<tr><td colspan="3"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $text?></b></br></br></td></tr>
<tr><td colspan="3">If there is any break in studies the same should be explained.</br></td></tr>
<tr><td colspan="3"></br></td></tr>
<tr><td colspan="3"><b>13. Details of Prizes, Medals, etc. won for Excellence in Academic / Co-Curricular Activities:&nbsp;&nbsp;&nbsp;</b><?php echo $prize_medals?></td></tr>
<tr><td colspan="3"><b>14. Details of Special Talents in Art / Music/ Sports, etc:&nbsp;&nbsp;&nbsp;</b><?php echo $art_music?></td></tr>
<tr><td colspan="3"><b>15. Parent Information:</td></tr>
<tr><td colspan="3"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Parent Name:&nbsp;&nbsp;&nbsp;</b><?php echo $parent_name?></td></tr>
<tr><td colspan="3"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Parent Address:&nbsp;&nbsp;&nbsp;</b><?php echo $parent_add?></td></tr>
<tr><td colspan="3"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Parent Phone Number:&nbsp;&nbsp;&nbsp;</b><?php echo $parent_ph?></td></tr>
<tr><td colspan="3"><b>16. Guardian Information:</td></tr>
<tr><td colspan="3"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Guardian Name:&nbsp;&nbsp;&nbsp;</b><?php echo $guardian_name?></td></tr>
<tr><td colspan="3"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Relationship with Guardian:&nbsp;&nbsp;&nbsp;</b><?php echo $guardian_relationship?></td></tr>
<tr><td colspan="3"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Guardian Address:&nbsp;&nbsp;&nbsp;</b><?php echo $guardian_add?></td></tr>
<tr><td colspan="3"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Guardian Phone Number:&nbsp;&nbsp;&nbsp;</b><?php echo $guardian_ph?></td></tr>
<tr><td colspan="3"><b>17. Profession of Parent:</td></tr>
<tr><td colspan="3"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Profession & Office Address:&nbsp;&nbsp;&nbsp;</b><?php echo $parent_off_add?></td></tr>
<tr><td colspan="3"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Office Phone Number:&nbsp;&nbsp;&nbsp;</b><?php echo $parent_off_ph?></td></tr>
<tr><td colspan="3"><b>18. Profession of Guardian:</td></tr>
<tr><td colspan="3"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Profession & Office Address:&nbsp;&nbsp;&nbsp;</b><?php echo $guardian_off_add?></td></tr>
<tr><td colspan="3"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Office Phone Number:&nbsp;&nbsp;&nbsp;</b><?php echo $guardian_off_ph?></td></tr>
<tr><td colspan="3"><b>19. Native Place Information:</td></tr>
<tr><td colspan="3"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Native Address:&nbsp;&nbsp;&nbsp;</b><?php echo $native_add?></td></tr>
<tr><td colspan="3"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Native Phone Number:&nbsp;&nbsp;&nbsp;</b><?php echo $native_ph?></td></tr>
<tr><td colspan="3"><b>20. Annual Income of Parent (from all sources):&nbsp;&nbsp;&nbsp;</b>Rs.<?php echo $parent_income?>/-</td></tr>
<tr><td colspan="3"><b>21. Annual Income of Guardian (from all sources):&nbsp;&nbsp;&nbsp;</b>Rs.<?php echo $guardian_income?>/-</td></tr>
<tr><td colspan="3"><b>22. Any other information which you may wish to give:&nbsp;&nbsp;&nbsp;</b><?php echo $extra_info?></td></tr>
<tr class="border"></tr>
<tr><td colspan="3"><strong>I hereby give an undertaking that I will abide by the rules and regulations of the College in force as at present and as may be amended from time to time.</strong></td></tr>
<tr><td></br></br></td></tr>
<tr><td colspan="3" align="left">
<b><u>Enclosure:</u></b></br><?php
if($year=='Second Year Engineering')
{
echo "1) S.S.C. Marksheet (Photocopy)</br>";
echo "2) H.S.C. Marksheet (Photocopy)</br>";
echo "3) F.E. Semester -I Marksheet (Photocopy)</br>";
echo "4) F.E. Semester -II Marksheet (Photocopy)</br>";
}
if($year=='Third Year Engineering')
{
echo "1) S.S.C. Marksheet (Photocopy)</br>";
echo "2) H.S.C. Marksheet (Photocopy)</br>";
echo "3) F.E. Semester -I Marksheet (Photocopy)</br>";
echo "4) F.E. Semester -II Marksheet (Photocopy)</br>";
echo "5) S.E. Semester -III Marksheet (Photocopy)</br>";
echo "6) S.E. Semester -IV Marksheet (Photocopy)</br>";
}
if($year=='Final Year Engineering')
{
echo "1) S.S.C. Marksheet (Photocopy)</br>";
echo "2) H.S.C. Marksheet (Photocopy)</br>";
echo "3) F.E. Semester -I Marksheet (Photocopy)</br>";
echo "4) F.E. Semester -II Marksheet (Photocopy)</br>";
echo "5) S.E. Semester -III Marksheet (Photocopy)</br>";
echo "6) S.E. Semester -IV Marksheet (Photocopy)</br>";
echo "7) T.E. Semester -V Marksheet (Photocopy)</br>";
echo "8) T.E. Semester -VI Marksheet (Photocopy)</br>";
}
?>
</td></tr>
</table>
</div>
</center>
</span>
</form>
</div>
</body>
</html>