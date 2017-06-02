<?php
session_start();
if($usernametype == "Admin"){
header("location: admin.php");	
}
if($usernametype == "Deo"){
header("location: deo.php");	
}
?>
