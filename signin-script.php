<?php 
include('db.php');
if(isset($_POST['submit'])){
	$user=$_POST['email'];
	$password=$_POST['password'];
    $fetch=mysql_query("SELECT `email`, `pass` FROM `members` WHERE `email`='$user' AND `pass`='$password'");
    $count=mysql_num_rows($fetch);
    if($count == 1)
    {
	$insert=mysql_query("INSERT INTO `welcome`(`membertype`, `firstname`,`memberid`) VALUES ((SELECT `membertype` FROM `members` WHERE `email`='$user' AND `pass`='$password'),(SELECT `firstname` FROM `members` WHERE `email`='$user' AND `pass`='$password'),(SELECT `memberid` FROM `members` WHERE `email`='$user'))");
	header('Location: redirect.php');
    }
    else
    {
	   header('Location:404.php');
	}
	}
?>