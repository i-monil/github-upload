<?php
$hostname='localhost';
$username='root';
$password='';
$database='admission-portal';
$con=mysqli_connect($hostname,$username,$password, $database);
mysqli_select_db($con,$database);
?>