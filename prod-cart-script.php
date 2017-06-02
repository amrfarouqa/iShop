<?php
session_start();
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "ishop";
	$conn = new mysqli($servername, $username, $password, $dbname);
if(isset($_POST['wish'.GET['id']])){
		  $id = $_GET['id'];
		  $qty = $_POST['qty'];
		 
		  $sql=	"INSERT INTO `wishlist`(`memberid`,`prodname`, `unitprice`, `quantity`, `subtotal`,`taxes`,`profit`,`imglink`) VALUES ((SELECT `memberid` FROM `welcome` WHERE 1),(SELECT `prodname` FROM `products` WHERE `prodid`='$id'),(SELECT `price` FROM `products` WHERE `prodid`='$id'),'$qty',(('$qty')*(SELECT `price` FROM `products` WHERE `prodid`='$id')),(SELECT `taxes` FROM `products` WHERE `prodid`='$id'),(SELECT `profit` FROM `products` WHERE `prodid`='$id'),(SELECT `imglink` FROM `products` WHERE `prodid`='$id'))";
		  	$resultdefault1 = $conn->query($sql);
		  
		  header('location: cust-wishlist.php');
}	
if(isset($_POST['add'.GET['id']])){
		  $id = $_GET['id'];
		  $qty = $_POST['qty'];
		  $sql=	"INSERT INTO `cart`(`memberid`,`prodname`, `unitprice`, `quantity`, `subtotal`,`taxes`,`profit`,`imglink`) VALUES ((SELECT `memberid` FROM `welcome` WHERE 1),(SELECT `prodname` FROM `products` WHERE `prodid`='$id'),(SELECT `price` FROM `products` WHERE `prodid`='$id'),'$qty',(('$qty')*(SELECT `price` FROM `products` WHERE `prodid`='$id')),(SELECT `taxes` FROM `products` WHERE `prodid`='$id'),(SELECT `profit` FROM `products` WHERE `prodid`='$id'),(SELECT `imglink` FROM `products` WHERE `prodid`='$id'))";
		  $resultdefault1 = $conn->query($sql);
		   header('location: cust-shopping-cart.php');
}
?>