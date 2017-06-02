<?php
session_start();
if($usernameview != "Welcome Guest!"){
	if($usernametype == "Admin"){
		header("location: admin.php");
	}else if($usernametype == "Deo"){
		header("location: deo.php");
	}else if($usernametype == "Cust"){
		header("location: cust-store.php");
	}else{
		header("location: signin.php");
	}
}
?>