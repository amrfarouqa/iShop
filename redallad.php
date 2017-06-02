<?php
session_start();
if($usernametype == "Deo"){
header("location: deo.php");	
}
if($usernametype == "Cust"){
header("location: cust-store.php");	
}
?>
