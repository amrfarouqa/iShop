<?php
session_start();
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "ishop";
	include('session.php');
	$conn = new mysqli($servername, $username, $password, $dbname);
if(isset($_POST['deleteall'])){
	$sql1="DELETE FROM `wishlist` WHERE `memberid`=(SELECT `memberid` FROM `welcome` WHERE 1)";	
    $result1 = $conn->query($sql1);
    $error = "Empty Wishlist!";
}
?>