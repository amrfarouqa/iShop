<?php
session_start();
if($usernametype == "Admin"){
header("location: admin.php");	
}
if($usernametype == "Cust"){
header("location: cust-store.php");	
}
?>
