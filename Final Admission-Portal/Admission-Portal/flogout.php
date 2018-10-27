<?php
	session_start();
   unset($_SESSION['emp_no']);
   header("location:  index.php");
?>