<?php
session_start();
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "ishop";
	$conn = new mysqli($servername, $username, $password, $dbname);
	$sqldefault1 = "SELECT * FROM `members` WHERE `firstname`=(SELECT `firstname` FROM `welcome` WHERE 1)";
	$resultdefault1 = $conn->query($sqldefault1);
	while($row1 = $resultdefault1->fetch_assoc()) {
     	  $firstname = $row1['firstname'];
     	  $lastname = $row1['lastname'];
     	  $email = $row1['email'];
     	  $pass = $row1['pass'];
     	  $phone = $row1['phone'];
     }
if(isset($_POST['refresh'])){
	$sqldefault1 = "SELECT * FROM `members` WHERE `firstname`=(SELECT `firstname` FROM `welcome` WHERE 1)";
	$resultdefault1 = $conn->query($sqldefault1);
     while($row1 = $resultdefault1->fetch_assoc()) {
     	  $firstname = $row1['firstname'];
     	  $lastname = $row1['lastname'];
     	  $email = $row1['email'];
     	  $pass = $row1['pass'];
     	  $phone = $row1['phone'];
     }
}
if(isset($_POST['submit'])){
		  $firstname = $_POST['firstname'];
     	  $lastname = $_POST['lastname'];
     	  $email = $_POST['email'];
     	  $pass = $_POST['pass'];
     	  $phone = $_POST['phone'];
     	  $membertype= "Deo";
	if(empty($_POST['firstname']) || empty($_POST['pass']) || empty($_POST['lastname']) || empty($_POST['email']) || empty($_POST['phone'])){
		$error = "Information Missing, Please Fill All Fields!";
	}else{
			$sql1="SELECT `firstname` FROM `members` WHERE `firstname`='$firstname'";
     		$sql2="SELECT `lastname` FROM `members` WHERE `lastname`='$lastname'";
     		$sql3="SELECT `email` FROM `members` WHERE `email`='$email'";
     		$sql4="SELECT `pass` FROM `members` WHERE `pass`='$pass'";
     		$sql5="SELECT `phone` FROM `members` WHERE `phone`='$phone'";
     		
     		$result1 = $conn->query($sql1);
			$result2 = $conn->query($sql2);
			$result3 = $conn->query($sql3);
			$result4 = $conn->query($sql4);
			$result5 = $conn->query($sql5);
			
			if($result1->num_rows > 0){
				
				$sql="UPDATE `members` SET `membertype`='$membertype',`firstname`='$firstname',`lastname`='$lastname',`email`='$email',`pass`='$pass',`phone`='$phone' WHERE `firstname`='$firstname'";
				$sql2="UPDATE `welcome` SET `firstname`='$firstname' WHERE `membertype`='$membertype'";
				$sqlupdate1=$conn->query($sql2);
				$sqlupdate1=$conn->query($sql);
				
				while($row1 = $result1->fetch_assoc()) {
         			$firstname = $row1["firstname"];
     			}
     			$error = "Changes Saved Successfully!";
			}
			if($result2->num_rows > 0){
				$sql="UPDATE `members` SET `membertype`='$membertype',`firstname`='$firstname',`lastname`='$lastname',`email`='$email',`pass`='$pass',`phone`='$phone' WHERE `lastname`='$lastname'";
				$sqlupdate1=$conn->query($sql);
				$sql2="UPDATE `welcome` SET `firstname`='$firstname' WHERE `membertype`='$membertype'";
				$sqlupdate1=$conn->query($sql2);
				while($row2 = $result2->fetch_assoc()) {
         		$lastname = $row2["lastname"];
     			}
     			$error = "Changes Saved Successfully!";
			}
			if($result3->num_rows > 0){
				$sql="UPDATE `members` SET `membertype`='$membertype',`firstname`='$firstname',`lastname`='$lastname',`email`='$email',`pass`='$pass',`phone`='$phone' WHERE `email`='$email'";
				$sqlupdate1=$conn->query($sql);
				$sql2="UPDATE `welcome` SET `firstname`='$firstname' WHERE `membertype`='$membertype'";
				$sqlupdate1=$conn->query($sql2);
				while($row3 = $result3->fetch_assoc()) {
      		   		$email = $row3["email"];
    			 }
    			 $error = "Changes Saved Successfully!";
			}
			if($result4->num_rows > 0){
				$sql="UPDATE `members` SET `membertype`='$membertype',`firstname`='$firstname',`lastname`='$lastname',`email`='$email',`pass`='$pass',`phone`='$phone' WHERE `pass`='$pass'";
				$sqlupdate1=$conn->query($sql);
				$sql2="UPDATE `welcome` SET `firstname`='$firstname' WHERE `membertype`='$membertype'";
				$sqlupdate1=$conn->query($sql2);
				while($row4 = $result4->fetch_assoc()) {
        		 $pass = $row4["pass"];
     			}
     			$error = "Changes Saved Successfully!";
			}
			if($result5->num_rows > 0){
				$sql="UPDATE `members` SET `membertype`='$membertype',`firstname`='$firstname',`lastname`='$lastname',`email`='$email',`pass`='$pass',`phone`='$phone' WHERE `phone`='$phone'";
				$sqlupdate1=$conn->query($sql);
				$sql2="UPDATE `welcome` SET `firstname`='$firstname' WHERE `membertype`='$membertype'";
				$sqlupdate1=$conn->query($sql2);
				while($row5 = $result5->fetch_assoc()) {
       		  	$phone = $row5["phone"];
    	    	}
    	    	$error = "Changes Saved Successfully!";
			}
				
     	    
    }
}
     
?>