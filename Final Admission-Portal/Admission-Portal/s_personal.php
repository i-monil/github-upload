<?php
ob_start();
session_start();
$reg_no=$_SESSION['reg_no'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$sname=$_POST['sname'];
$moth_name=$_POST['moth_name'];
$post_add=$_POST['post_add'];
$tel_no=$_POST['tel_no'];
$bday=$_POST['bday'];
$dob_words=$_POST['dob_words'];
$gender=$_POST['gender'];
$marital=$_POST['marital'];
$birth_place=$_POST['birth_place'];
$nationality=$_POST['nationality'];
$religion=$_POST['religion'];
$cast=$_POST['cast'];
$category=$_POST['category'];
$scholarship=$_POST['scholarship'];
$m_tongue=$_POST['m_tongue'];
$last_insti=$_POST['last_insti'];
if($_SESSION['year']=='SE')
{
$fe_fee_receipt=$_POST['fe_fee_receipt'];
$fe_fee_date=$_POST['fe_fee_date'];
$fe_fee_amount=$_POST['fe_fee_amount'];
$se_fee_receipt="";
$se_fee_date="";
$se_fee_amount="";
$te_fee_receipt="";
$te_fee_date="";
$te_fee_amount="";
}
if($_SESSION['year']=='TE')
{
$fe_fee_receipt=$_POST['fe_fee_receipt'];
$fe_fee_date=$_POST['fe_fee_date'];
$fe_fee_amount=$_POST['fe_fee_amount'];
$se_fee_receipt=$_POST['se_fee_receipt'];
$se_fee_date=$_POST['se_fee_date'];
$se_fee_amount=$_POST['se_fee_amount'];
$te_fee_receipt="";
$te_fee_date="";
$te_fee_amount="";
}
if($_SESSION['year']=='BE')
{
$fe_fee_receipt=$_POST['fe_fee_receipt'];
$fe_fee_date=$_POST['fe_fee_date'];
$fe_fee_amount=$_POST['fe_fee_amount'];
$se_fee_receipt=$_POST['se_fee_receipt'];
$se_fee_date=$_POST['se_fee_date'];
$se_fee_amount=$_POST['se_fee_amount'];
$te_fee_receipt=$_POST['te_fee_receipt'];
$te_fee_date=$_POST['te_fee_date'];
$te_fee_amount=$_POST['te_fee_amount'];
}
include('dbconnect.php');
$query = mysqli_query($con, "select * from personal where reg_no='$reg_no'");
$rows = mysqli_num_rows($query);
$data = mysqli_fetch_assoc($query);
if($rows == 1)
	{
	$retval=mysqli_query($con,"UPDATE personal SET s_name='$sname',f_name='$fname',m_name='$mname',moth_name='$moth_name',post_add='$post_add',tel_no='$tel_no',bday='$bday',dob_words='$dob_words',gender='$gender',marital='$marital',birth_place='$birth_place',nationality='$nationality',religion='$religion',cast='$cast',category='$category',scholarship='$scholarship',m_tongue='$m_tongue',last_insti='$last_insti',fe_fee_receipt='$fe_fee_receipt',fe_fee_date='$fe_fee_date',fe_fee_amount='$fe_fee_amount',se_fee_receipt='$se_fee_receipt',se_fee_date='$se_fee_date',se_fee_amount='$se_fee_amount',te_fee_receipt='$te_fee_receipt',te_fee_date='$te_fee_date',te_fee_amount='$te_fee_amount' WHERE reg_no='$reg_no'");
	if(!$retval)
		{
		print '<script type="text/javascript">'; 
		print 'alert("Error: Sorry for inconvenience. The Data is not Saved. Fill it again.");'; 
		print 'window.location.href = "personal.php";';
		print '</script>';  
		}
    else
		{
		print '<script type="text/javascript">'; 
		print 'alert("Data is Updated.");'; 
		print 'window.location.href = "academic.php";';
		print '</script>';  
		}
	}
else
	{
	$retval=mysqli_query($con, "insert into personal (reg_no,s_name,f_name,m_name,moth_name,post_add,tel_no,bday,dob_words,gender,marital,birth_place,nationality,religion,cast,category,m_tongue,last_insti,fe_fee_receipt,fe_fee_date,fe_fee_amount,se_fee_receipt,se_fee_date,se_fee_amount,te_fee_receipt,te_fee_date,te_fee_amount)values('$reg_no','$sname','$fname','$mname','$moth_name','$post_add','$tel_no','$bday','$dob_words','$gender','$marital','$birth_place','$nationality','$religion','$cast','$category','$m_tongue','$last_insti','$fe_fee_receipt','$fe_fee_date','$fe_fee_amount','$se_fee_receipt','$se_fee_date','$se_fee_amount','$te_fee_receipt','$te_fee_date','$te_fee_amount') ");
	if(!$retval)
		{
		print '<script type="text/javascript">'; 
		print 'alert("Error: Sorry for inconvenience. The Data is not Saved. Fill it again.");'; 
		print 'window.location.href = "personal.php";';
		print '</script>';  
		}
    else
		{
		print '<script type="text/javascript">'; 
		print 'alert("Data is Saved.");'; 
		print 'window.location.href = "academic.php";';
		print '</script>';  
		}
	}
?>