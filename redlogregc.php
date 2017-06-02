<?php
session_start();
if($usernameview != "Welcome Guest!"){
	if($usernametype == "Admin"){
		header("location: check-suc.php");
	}else if($usernametype == "Deo"){
		header("location: check-suc.php");
	}else if($usernametype == "Cust"){
		header("location: check-suc.php");
	}else{
		header("location: signin.php");
	}
}
?>