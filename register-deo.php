<?php
session_start(); 
include('db.php');
if (isset($_POST['submit'])) {
	$email=$_POST['email'];
	$password=$_POST['password'];
	$confpassword=$_POST['password_confirmation'];
	$membertype="Deo";
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$phone=$_POST['telephone'];
	if($password != $confpassword){
		$error = "Password Mismatch Error!";
	}else{
		$reg=mysql_query("INSERT INTO `members`(`membertype`, `firstname`, `lastname`, `email`, `pass`, `phone`) VALUES ('$membertype','$firstname','$lastname','$email','$password','$phone')");
		header("Location: deo-suc.php");
		}
	}
	?>