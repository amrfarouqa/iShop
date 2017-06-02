<?php
include('db.php');
include('session.php');
if(isset($_POST['emptycart'])){
	$sql="DELETE FROM `cart` WHERE `memberid`=(SELECT `memberid` FROM `welcome` WHERE 1)";
	$res=mysql_query($sql);
	$error = "Cart Is Empty!";
}
?>