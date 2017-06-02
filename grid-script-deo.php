<?php
session_start();
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "ishop";
	$conn = new mysqli($servername, $username, $password, $dbname);
	//$sqldefault1 = "SELECT `firstname` FROM `members` WHERE 1";
	//$sqldefault2 = "SELECT `lastname` FROM `members` WHERE 1";
	//$sqldefault3 = "SELECT `email` FROM `members` WHERE 1";
	//$sqldefault4 = "SELECT `pass` FROM `members` WHERE 1";
	//$sqldefault5 = "SELECT `pass` FROM `members` WHERE 1";
	//$sqldefault6 = "SELECT `phone` FROM `members` WHERE 1";
	//$resultdefault1 = $conn->query($sqldefault1);
	//$resultdefault2 = $conn->query($sqldefault2);
	//$resultdefault3 = $conn->query($sqldefault3);
	//$resultdefault4 = $conn->query($sqldefault4);
	//$resultdefault5 = $conn->query($sqldefault5);
	//$resultdefault6 = $conn->query($sqldefault6);
     //while($row1 = $resultdefault1->fetch_assoc()) {
     //    $firstnamestring = $row1["firstname"];
     //}
     //while($row2 = $resultdefault2->fetch_assoc()) {
     //    $lastnamestring = $row2["lastname"];
     //}
     //while($row3 = $resultdefault3->fetch_assoc()) {
     //    $emailstring = $row3["email"];
    // }
    // while($row4 = $resultdefault4->fetch_assoc()) {
    //     $passstring = $row4["pass"];
    // }
    // while($row5 = $resultdefault5->fetch_assoc()) {
     //    $confpassstring = $row5["pass"];
    // }
    //while($row6 = $resultdefault6->fetch_assoc()) {
     //    $telephonestring = $row6["phone"];
     //}
 
     if(isset($_POST['search'])){
     	$prodid=$_POST['prodid'];
		$prodname=$_POST['prodname'];
		$proddescript=$_POST['proddescript'];
		$taxes=$_POST['taxes'];
		$profit=$_POST['profit'];
		$price=$_POST['price'];
		$qty=$_POST["quantity"];
     	if(empty($_POST['prodid'])){
     		$error = "Please type in Product ID and click Search to start Editing.";
     	}else{
     		$sql1="SELECT `prodid` FROM `products` WHERE `prodid`='$prodid'";
     		$sql2="SELECT `prodname` FROM `products` WHERE `prodid`='$prodid'";
     		$sql3="SELECT `proddescripd` FROM `products` WHERE `prodid`='$prodid'";
     		$sql4="SELECT `price` FROM `products` WHERE `prodid`='$prodid'";
     		$sql5="SELECT `taxes` FROM `products` WHERE `prodid`='$prodid'";
     		$sql6="SELECT `profit` FROM `products` WHERE `prodid`='$prodid'";
     		$sql7="SELECT `qty` FROM `products` WHERE `prodid`='$prodid'";
     		$sql8="SELECT `imglink` FROM `products` WHERE `prodid`='$prodid'";
     		$result1 = $conn->query($sql1);
			$result2 = $conn->query($sql2);
			$result3 = $conn->query($sql3);
			$result4 = $conn->query($sql4);
			$result5 = $conn->query($sql5);
			$result6 = $conn->query($sql6);
			$result7 = $conn->query($sql7);
			$result8 = $conn->query($sql8);
			while($row1 = $result1->fetch_assoc()) {
         		$idstring = $row1["prodid"];
     		}
     		while($row2 = $result2->fetch_assoc()) {
         		$productnamestring = $row2["prodname"];
     		}
     		while($row3 = $result3->fetch_assoc()) {
      		   $proddescriptstring = $row3["proddescripd"];
    		 }
     		while($row4 = $result4->fetch_assoc()) {
        		 $pricestring = $row4["price"];
     		}	
     		while($row5 = $result5->fetch_assoc()) {
       		  $taxestring = $row5["taxes"];
    	    }
    	    while($row6 = $result6->fetch_assoc()) {
       		   $profitstring = $row6["profit"];
    	    }
    	    while($row7 = $result7->fetch_assoc()) {
       		  $quantitystring = $row7["qty"];
    	    }
    	    while($row8 = $result8->fetch_assoc()) {
       		  $filenamez = $row8["imglink"];
    	    }
     }         
}


if(isset($_POST['submit'])){
		$prodid=$_POST['prodid'];
		$prodname=$_POST['prodname'];
		$proddescript=$_POST['proddescripd'];
		$taxes=$_POST['taxes'];
		$profit=$_POST['profit'];
		$price=$_POST['price'];
		$qty=$_POST['quantity'];
	if(empty($_POST['prodid'])){
		$error = "ID is Missing Please Select Product Identifier!";
	}else{
			$sql1="SELECT * FROM `products` WHERE `prodid`='$prodid'";	
     		$result1 = $conn->query($sql1);
			if($result1->num_rows > 0){
				$sql="UPDATE `products` SET `prodname`='$prodname',`proddescripd`='$proddescript',`qty`='$qty',`taxes`='$taxes',`profit`='$profit',`price`='$price' WHERE `prodid`='$prodid'";
				$sqlupdatew=$conn->query($sql);
				while($row1 = $result1->fetch_assoc()) {
         		$idstring = $row1["prodid"];
         		$productnamestring = $row1["prodname"];
         		$pricestring = $row1["price"];
         		$taxestring = $row1["taxes"];
         		$profitstring = $row1["profit"];
         		$proddescriptstring = $row1["proddescripd"];
         		$quantitystring= $row1["qty"];
         		
     			}
			}
    }
}

if(isset($_POST['delete'])){
	$prodid=$_POST['prodid'];
	$sql1="DELETE FROM `products` WHERE `prodid`='$prodid'";	
    $result1 = $conn->query($sql1);
}
?>