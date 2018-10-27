<?php
	$reg_no=$_SESSION['reg_no'];
	include('dbconnect.php');
	$query = mysqli_query($con, "select * from personal where reg_no='$reg_no'");
	$rows = mysqli_num_rows($query);
	$data = mysqli_fetch_assoc($query);
	if($rows == 1)
	{
		$fname = $data['f_name'];
		$mname = $data['m_name'];
		$sname = $data['s_name'];
		$moth_name = $data['moth_name'];
		$post_add = $data['post_add'];
		$tel_no = $data['tel_no'];
		$bday = $data['bday'];
		$dob_words= $data['dob_words'];
		$gender=$data['gender'];
		$marital = $data['marital'];
		$birth_place = $data['birth_place'];
		$nationality = $data['nationality'];
		$religion = $data['religion'];
		$cast = $data['cast'];
		$category = $data['category'];
		$scholarship = $data['scholarship'];
		$m_tongue = $data['m_tongue'];
		$last_insti = $data['last_insti'];
		$fe_fee_receipt = $data['fe_fee_receipt'];
		$fe_fee_date = $data['fe_fee_date'];
		$fe_fee_amount = $data['fe_fee_amount'];
		$se_fee_receipt = $data['se_fee_receipt'];
		$se_fee_date = $data['se_fee_date'];
		$se_fee_amount = $data['se_fee_amount'];
		$te_fee_receipt = $data['te_fee_receipt'];
		$te_fee_date = $data['te_fee_date'];
		$te_fee_amount = $data['te_fee_amount'];
	}
	else
	{
	$query = mysqli_query($con, "select * from stu_login where reg_no='$reg_no'");
	$rows = mysqli_num_rows($query);
	$data = mysqli_fetch_assoc($query);
	if($rows == 1)
		{
		$fname = $data['F_Name'];
		$mname = $data['M_Name'];
		$sname = $data['l_Name'];
		$moth_name = $data['Mothers_Name'];
		$post_add = $data['post_add'];
		$tel_no = $data['tel_no1'];
		$bday = $data['bday'];
		$dob_words= "";
		$gender=$data['gender'];
		$marital = "";
		$birth_place = "";
		$nationality = $data['nationality'];
		$religion = "";
		$cast = $data['cast'];
		$category = $data['category'];
		$scholarship = "";
		$m_tongue = $data['m_tongue'];
		$last_insti = "";
		$fe_fee_receipt = "";
		$fe_fee_date = "";
		$fe_fee_amount = "";
		$se_fee_receipt = "";
		$se_fee_date = "";
		$se_fee_amount = "";
		$te_fee_receipt = "";
		$te_fee_date = "";
		$te_fee_amount = "";

		}
	}
?>