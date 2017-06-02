<?php
include('db.php');
include('session.php');
include('redlogregc.php');
include('redall.php'); 
$sql="UPDATE `cart` SET `sold`='S' WHERE `memberid`=(SELECT `memberid` from welcome where 1)";
$query=mysql_query($sql);
$sqla="SELECT * from cart WHERE 1";
$query1=mysql_query($sqla);
if(mysql_num_rows($query1)){
	$sql2="INSERT INTO `orders`(`orderprice`, `ordertaxe`, `orderprofit`) VALUES ((SELECT sum(Subtotal) from cart WHERE `memberid`=(SELECT `memberid` from welcome where 1)),(SELECT sum(taxes) from cart WHERE `memberid`=(SELECT `memberid` from welcome where 1)),(SELECT sum(profit) from cart WHERE `memberid`=(SELECT `memberid` from welcome where 1)))";
	$result2= mysql_query($sql2);  
	$sql3="INSERT INTO `order_history`(`memberid`, `Amount`, `Status`) VALUES ((SELECT `memberid` from welcome WHERE 1),((SELECT sum(Subtotal) from cart WHERE `memberid`=(SELECT `memberid` from welcome where 1))),'Finalized')";     
	$result3= mysql_query($sql3);
}else{
	
}
?>