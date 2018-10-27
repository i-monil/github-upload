<?php
$reg_no=$_SESSION['reg_no'];
if($_SESSION['year']=='SE')
	$year="Second Year Engineering";
if($_SESSION['year']=='TE')
	$year="Third Year Engineering";
if($_SESSION['year']=='BE')
	$year="Finaal Year Engineering";
if($_SESSION['branch']=='CM')
	$branch="Computer Engineering";
if($_SESSION['branch']=='CM-D')
	$branch="Computer Engineering(DSE)";
if($_SESSION['branch']=='EX')
	$branch="Electronics Engineering";
if($_SESSION['branch']=='IT')
	$branch="Information Technology";
if($_SESSION['branch']=='ETC')
	$branch="Electronics & Telecommunication Engineering";
include('dbconnect.php');
$query = mysqli_query($con, "select * from stu_photo where reg_no='$reg_no'");
	$rows = mysqli_num_rows($query);
	$data = mysqli_fetch_assoc($query);
	if($rows == 1)
	{
	$photo_path=$data['photo_path'];
	}
	else
	{
	$photo_path="photos/no-user-image.gif";
	}
$query = mysqli_query($con, "select * from personal where reg_no='$reg_no'");
	$rows = mysqli_num_rows($query);
	$data = mysqli_fetch_assoc($query);
	$fname=$data['f_name'];
	$mname=$data['m_name'];
	$sname=$data['s_name'];
	$mothname=$data['moth_name'];
	$full_name=$fname." ".$mname." ".$sname." ".$mothname;
	$address=$data['post_add'];
	$tel=$data['tel_no'];
	$bday=$data['bday'];
	$dob_words=$data['dob_words'];
	$gender=$data['gender'];
	if($gender=='M')
		$gender='Male';
	if($gender=='F')
		$gender='Female';
	$marital=$data['marital'];
	$birth_place=$data['birth_place'];
	$nationality=$data['nationality'];
	$religion=$data['religion'];
	$cast=$data['cast'];
	$category=$data['category'];
	$scholarship=$data['scholarship'];
	$m_tongue=$data['m_tongue'];
	$last_insti=$data['last_insti'];
	$fe_fee_receipt=$data['fe_fee_receipt'];
	$fe_fee_date=$data['fe_fee_date'];
	$fe_fee_amount=$data['fe_fee_amount'];
	$se_fee_receipt=$data['se_fee_receipt'];
	$se_fee_date=$data['se_fee_date'];
	$se_fee_amount=$data['se_fee_amount'];
	$te_fee_receipt=$data['te_fee_receipt'];
	$te_fee_date=$data['te_fee_date'];
	$te_fee_amount=$data['te_fee_amount'];
$query = mysqli_query($con, "select * from sem_kt where reg_no='$reg_no'");
	$rows = mysqli_num_rows($query);
	$data = mysqli_fetch_assoc($query);
	$pass_kt=$data['pass_kt'];
	$kt=$data['kt'];
	if($pass_kt=='pass')
	{
	if($year=="Second Year Engineering")
		$text="I have passed Semster - I to Semester - II examinations with out any backlog and have enclosed all the zerox copies of the marksheets.";
	if($year=="Third Year Engineering")
		$text="I have passed Semster - I to Semester - IV examinations with out any backlog and have enclosed all the zerox copies of the marksheets.";
	if($year=="Final Year Engineering")
		$text="I have passed Semster - I to Semester - VI examinations with out any backlog and have enclosed all the zerox copies of the marksheets.";
	}
	else
	{
	if($year=="Second Year Engineering")
		$text="I have  a backlog of '$kt' heads of passing in Sem-I and Sem-II examinations considered together and have enclosed all the zerox copies of the marksheets.";
	if($year=="Third Year Engineering")
		$text="I have passed Sem I & Sem II examinations and have a backlog of '$kt' heads of passing in Sem-III and Sem-IV examinations considered together and have enclosed all the zerox copies of the marksheets.";
	if($year=="Final Year Engineering")
		$text="I have passed Sem I & Sem IV examinations and have a backlog of '$kt' heads of passing in Sem-V and Sem-VI examinations considered together and have enclosed all the zerox copies of the marksheets.";
	}
$query = mysqli_query($con, "select * from cocurricular where reg_no='$reg_no'");
	$rows = mysqli_num_rows($query);
	$data = mysqli_fetch_assoc($query);
	$prize_medals=$data['prize_medals'];
	$art_music=$data['art_music'];
	$extra_info=$data['extra_info'];
$query = mysqli_query($con, "select * from parent where reg_no='$reg_no'");
	$rows = mysqli_num_rows($query);
	$data = mysqli_fetch_assoc($query);
	$parent_name=$data['parent_name'];
	$parent_add=$data['parent_add'];
	$parent_ph=$data['parent_ph'];
	$guardian_name=$data['guardian_name'];
	$guardian_relationship=$data['guardian_relationship'];
	$guardian_add=$data['guardian_add'];
	$guardian_ph=$data['guardian_ph'];
	$parent_off_add=$data['parent_off_add'];
	$parent_off_ph=$data['parent_off_ph'];
	$guardian_off_add=$data['guardian_off_add'];
	$guardian_off_ph=$data['guardian_off_ph'];
	$native_add=$data['native_add'];
	$native_ph=$data['native_ph'];
	$parent_income=$data['parent_income'];
	$guardian_income=$data['guardian_income'];
?>