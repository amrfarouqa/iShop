<?php
session_start(); 
include('db.php');
if (isset($_POST['submit'])) {
		$prodname=$_POST['prodname'];
		$proddescript=$_POST['proddescripd'];
		$taxes=$_POST['taxes'];
		$profit=$_POST['profit'];
		$price=$_POST['price'];
		$qty=$_POST['quantity'];
		$reg=mysql_query("INSERT INTO `products`(`prodname`, `proddescripd`, `price`,`qty`, `taxes`, `profit`,`weblink`,`imglink`,`imglrglink`) VALUES ('$prodname','$proddescript','$price','$qty','$taxes','$profit','prod-speakers.php','img/newprod.jpg','img/newprod.jpg')");
		header("Location: deo-add-suc.php");
	}
	?>