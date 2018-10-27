<?php
	session_start();
   unset($_SESSION['reg_no']);
   unset($_SESSION['name']);
   unset($_SESSION['branch']);
   unset($_SESSION['year']);
   header("location:  index.php");
?>