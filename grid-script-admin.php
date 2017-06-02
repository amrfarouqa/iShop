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
     	$email=$_POST['email'];
		$password=$_POST['pass'];
		$confpassword=$_POST['passconf'];
		$membertype="Deo";
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$phone=$_POST['telephone'];
     	if(empty($_POST['firstname'])){
     		
     	}else{
     		$sql1="SELECT `firstname` FROM `members` WHERE `firstname`='$firstname'";
     		$sql2="SELECT `lastname` FROM `members` WHERE `firstname`='$firstname'";
     		$sql3="SELECT `email` FROM `members` WHERE `firstname`='$firstname'";
     		$sql4="SELECT `pass` FROM `members` WHERE `firstname`='$firstname'";
     		$sql5="SELECT `pass` FROM `members` WHERE `firstname`='$firstname'";
     		$sql6="SELECT `phone` FROM `members` WHERE `firstname`='$firstname'";
     		$result1 = $conn->query($sql1);
			$result2 = $conn->query($sql2);
			$result3 = $conn->query($sql3);
			$result4 = $conn->query($sql4);
			$result5 = $conn->query($sql5);
			$result6 = $conn->query($sql6);
			while($row1 = $result1->fetch_assoc()) {
         		$firstnamestring = $row1["firstname"];
     		}
     		while($row2 = $result2->fetch_assoc()) {
         		$lastnamestring = $row2["lastname"];
     		}
     		while($row3 = $result3->fetch_assoc()) {
      		   $emailstring = $row3["email"];
    		 }
     		while($row4 = $result4->fetch_assoc()) {
        		 $passstring = $row4["pass"];
     		}	
     		while($row5 = $result5->fetch_assoc()) {
       		  $confpassstring = $row5["pass"];
    	    }
     	    while($row6 = $result6->fetch_assoc()) {
     		    $telephonestring = $row6["phone"];
    		}
    	}
    	if(empty($_POST['lastname'])){
     		
     	}else{
     		$sql1="SELECT `firstname` FROM `members` WHERE `lastname`='$lastname'";
     		$sql2="SELECT `lastname` FROM `members` WHERE `lastname`='$lastname'";
     		$sql3="SELECT `email` FROM `members` WHERE `lastname`='$lastname'";
     		$sql4="SELECT `pass` FROM `members` WHERE `lastname`='$lastname'";
     		$sql5="SELECT `pass` FROM `members` WHERE `lastname`='$lastname'";
     		$sql6="SELECT `phone` FROM `members` WHERE `lastname`='$lastname'";
     		$result1 = $conn->query($sql1);
			$result2 = $conn->query($sql2);
			$result3 = $conn->query($sql3);
			$result4 = $conn->query($sql4);
			$result5 = $conn->query($sql5);
			$result6 = $conn->query($sql6);
			while($row1 = $result1->fetch_assoc()) {
         		$firstnamestring = $row1["firstname"];
     		}
     		while($row2 = $result2->fetch_assoc()) {
         		$lastnamestring = $row2["lastname"];
     		}
     		while($row3 = $result3->fetch_assoc()) {
      		   $emailstring = $row3["email"];
    		 }
     		while($row4 = $result4->fetch_assoc()) {
        		 $passstring = $row4["pass"];
     		}	
     		while($row5 = $result5->fetch_assoc()) {
       		  $confpassstring = $row5["pass"];
    	    }
     	    while($row6 = $result6->fetch_assoc()) {
     		    $telephonestring = $row6["phone"];
    		}
    	}
    	if(empty($_POST['email'])){
     		
     	}else{
     		$sql1="SELECT `firstname` FROM `members` WHERE `email`='$email'";
     		$sql2="SELECT `lastname` FROM `members` WHERE `email`='$email'";
     		$sql3="SELECT `email` FROM `members` WHERE `email`='$email'";
     		$sql4="SELECT `pass` FROM `members` WHERE `email`='$email'";
     		$sql5="SELECT `pass` FROM `members` WHERE `email`='$email'";
     		$sql6="SELECT `phone` FROM `members` WHERE `email`='$email'";
     		$result1 = $conn->query($sql1);
			$result2 = $conn->query($sql2);
			$result3 = $conn->query($sql3);
			$result4 = $conn->query($sql4);
			$result5 = $conn->query($sql5);
			$result6 = $conn->query($sql6);
			while($row1 = $result1->fetch_assoc()) {
         		$firstnamestring = $row1["firstname"];
     		}
     		while($row2 = $result2->fetch_assoc()) {
         		$lastnamestring = $row2["lastname"];
     		}
     		while($row3 = $result3->fetch_assoc()) {
      		   $emailstring = $row3["email"];
    		 }
     		while($row4 = $result4->fetch_assoc()) {
        		 $passstring = $row4["pass"];
     		}	
     		while($row5 = $result5->fetch_assoc()) {
       		  $confpassstring = $row5["pass"];
    	    }
     	    while($row6 = $result6->fetch_assoc()) {
     		    $telephonestring = $row6["phone"];
    		}
    	}
    	
    	if(empty($_POST['pass'])){
     		
     	}else{
     		$sql11="SELECT `firstname` FROM `members` WHERE `pass`='$password'";
     		$sql22="SELECT `lastname` FROM `members` WHERE `pass`='$password'";
     		$sql33="SELECT `email` FROM `members` WHERE `pass`='$password'";
     		$sql44="SELECT `pass` FROM `members` WHERE `pass`='$password'";
     		$sql55="SELECT `pass` FROM `members` WHERE `pass`='$password'";
     		$sql66="SELECT `phone` FROM `members` WHERE `pass`='$password'";
     		$result11 = $conn->query($sql11);
			$result22 = $conn->query($sql22);
			$result33 = $conn->query($sql33);
			$result44 = $conn->query($sql44);
			$result55 = $conn->query($sql55);
			$result66 = $conn->query($sql66);
			while($row1 = $result11->fetch_assoc()) {
         		$firstnamestring = $row1["firstname"];
     		}
     		while($row2 = $result22->fetch_assoc()) {
         		$lastnamestring = $row2["lastname"];
     		}
     		while($row3 = $result33->fetch_assoc()) {
      		   $emailstring = $row3["email"];
    		 }
     		while($row4 = $result44->fetch_assoc()) {
        		 $passstring = $row4["pass"];
     		}	
     		while($row5 = $result55->fetch_assoc()) {
       		  $confpassstring = $row5["pass"];
    	    }
     	    while($row6 = $result66->fetch_assoc()) {
     		    $telephonestring = $row6["phone"];
    		}
    	}
    	
    	if(empty($_POST['passconf'])){
     		
     	}else{
     		$sql1="SELECT `firstname` FROM `members` WHERE `pass`='$confpassword'";
     		$sql2="SELECT `lastname` FROM `members` WHERE `pass`='$confpassword'";
     		$sql3="SELECT `email` FROM `members` WHERE `pass`='$confpassword'";
     		$sql4="SELECT `pass` FROM `members` WHERE `pass`='$confpassword'";
     		$sql5="SELECT `pass` FROM `members` WHERE `pass`='$confpassword'";
     		$sql6="SELECT `phone` FROM `members` WHERE `pass`='$confpassword'";
     		$result1 = $conn->query($sql1);
			$result2 = $conn->query($sql2);
			$result3 = $conn->query($sql3);
			$result4 = $conn->query($sql4);
			$result5 = $conn->query($sql5);
			$result6 = $conn->query($sql6);
			while($row1 = $result1->fetch_assoc()) {
         		$firstnamestring = $row1["firstname"];
     		}
     		while($row2 = $result2->fetch_assoc()) {
         		$lastnamestring = $row2["lastname"];
     		}
     		while($row3 = $result3->fetch_assoc()) {
      		   $emailstring = $row3["email"];
    		 }
     		while($row4 = $result4->fetch_assoc()) {
        		 $passstring = $row4["pass"];
     		}	
     		while($row5 = $result5->fetch_assoc()) {
       		  $confpassstring = $row5["pass"];
    	    }
     	    while($row6 = $result6->fetch_assoc()) {
     		    $telephonestring = $row6["phone"];
    		}
    	}
    	
    	if(empty($_POST['telephone'])){
     		
     	}else{
     		$sql1="SELECT `firstname` FROM `members` WHERE `phone`='$phone'";
     		$sql2="SELECT `lastname` FROM `members` WHERE `phone`='$phone'";
     		$sql3="SELECT `email` FROM `members` WHERE `phone`='$phone'";
     		$sql4="SELECT `pass` FROM `members` WHERE `phone`='$phone'";
     		$sql5="SELECT `pass` FROM `members` WHERE `phone`='$phone'";
     		$sql6="SELECT `phone` FROM `members` WHERE `phone`='$phone'";
     		$result1 = $conn->query($sql1);
			$result2 = $conn->query($sql2);
			$result3 = $conn->query($sql3);
			$result4 = $conn->query($sql4);
			$result5 = $conn->query($sql5);
			$result6 = $conn->query($sql6);
			while($row1 = $result1->fetch_assoc()) {
         		$firstnamestring = $row1["firstname"];
     		}
     		while($row2 = $result2->fetch_assoc()) {
         		$lastnamestring = $row2["lastname"];
     		}
     		while($row3 = $result3->fetch_assoc()) {
      		   $emailstring = $row3["email"];
    		 }
     		while($row4 = $result4->fetch_assoc()) {
        		 $passstring = $row4["pass"];
     		}	
     		while($row5 = $result5->fetch_assoc()) {
       		  $confpassstring = $row5["pass"];
    	    }
     	    while($row6 = $result6->fetch_assoc()) {
     		    $telephonestring = $row6["phone"];
    		}
    	}
}

if(isset($_POST['submit'])){
		$email=$_POST['email'];
		$password=$_POST['pass'];
		$confpassword=$_POST['passconf'];
		$membertype="Deo";
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$phone=$_POST['telephone'];
	if(empty($_POST['passconf']) || empty($_POST['pass']) || empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['email']) || empty($_POST['telephone'])){
		$error = "Information Missing, Please Fill All Fields!";
	}else{
			$sql1="SELECT `firstname` FROM `members` WHERE `firstname`='$firstname'";
     		$sql2="SELECT `lastname` FROM `members` WHERE `lastname`='$lastname'";
     		$sql3="SELECT `email` FROM `members` WHERE `email`='$email'";
     		$sql4="SELECT `pass` FROM `members` WHERE `pass`='$password'";
     		$sql5="SELECT `pass` FROM `members` WHERE `pass`='$confpassword'";
     		$sql6="SELECT `phone` FROM `members` WHERE `phone`='$phone'";
     		$result1 = $conn->query($sql1);
			$result2 = $conn->query($sql2);
			$result3 = $conn->query($sql3);
			$result4 = $conn->query($sql4);
			$result5 = $conn->query($sql5);
			$result6 = $conn->query($sql6);
			if($result1->num_rows > 0){
				$sql="UPDATE `members` SET `membertype`='$membertype',`firstname`='$firstname',`lastname`='$lastname',`email`='$email',`pass`='$password',`phone`='$phone' WHERE `firstname`='$firstname'";
				$sqlupdate1=$conn->query($sql);
				while($row1 = $result1->fetch_assoc()) {
         		$firstnamestring = $row1["firstname"];
     			}
			}
			if($result2->num_rows > 0){
				$sql="UPDATE `members` SET `membertype`='$membertype',`firstname`='$firstname',`lastname`='$lastname',`email`='$email',`pass`='$password',`phone`='$phone' WHERE `lastname`='$lastname'";
				$sqlupdate1=$conn->query($sql);
				while($row2 = $result2->fetch_assoc()) {
         		$lastnamestring = $row2["lastname"];
     			}
			}
			if($result3->num_rows > 0){
				$sql="UPDATE `members` SET `membertype`='$membertype',`firstname`='$firstname',`lastname`='$lastname',`email`='$email',`pass`='$password',`phone`='$phone' WHERE `email`='$email'";
				$sqlupdate1=$conn->query($sql);
				while($row3 = $result3->fetch_assoc()) {
      		   		$emailstring = $row3["email"];
    			 }
			}
			if($result4->num_rows > 0){
				$sql="UPDATE `members` SET `membertype`='$membertype',`firstname`='$firstname',`lastname`='$lastname',`email`='$email',`pass`='$password',`phone`='$phone' WHERE `pass`='$password'";
				$sqlupdate1=$conn->query($sql);
				while($row4 = $result4->fetch_assoc()) {
        		 $passstring = $row4["pass"];
     			}
			}
			if($result5->num_rows > 0){
				$sql="UPDATE `members` SET `membertype`='$membertype',`firstname`='$firstname',`lastname`='$lastname',`email`='$email',`pass`='$password',`phone`='$phone' WHERE `pass`='$confpassword'";
				$sqlupdate1=$conn->query($sql);
				while($row5 = $result5->fetch_assoc()) {
       		  	$confpassstring = $row5["pass"];
    	    	}
			}
			if($result6->num_rows > 0){
				$sql="UPDATE `members` SET `membertype`='$membertype',`firstname`='$firstname',`lastname`='$lastname',`email`='$email',`pass`='$password',`phone`='$phone' WHERE `phone`='$phone'";
				$sqlupdate1=$conn->query($sql);
				while($row6 = $result6->fetch_assoc()) {
     		    $telephonestring = $row6["phone"];
    			}
	}		}  		
}

if(isset($_POST['delete'])){
	$email=$_POST['email'];
		$password=$_POST['pass'];
		$confpassword=$_POST['passconf'];
		$membertype="Deo";
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$phone=$_POST['telephone'];
			$sql1="SELECT `firstname` FROM `members` WHERE `firstname`='$firstname'";
     		$sql2="SELECT `lastname` FROM `members` WHERE `lastname`='$lastname'";
     		$sql3="SELECT `email` FROM `members` WHERE `email`='$email'";
     		$sql4="SELECT `pass` FROM `members` WHERE `pass`='$password'";
     		$sql5="SELECT `pass` FROM `members` WHERE `pass`='$confpassword'";
     		$sql6="SELECT `phone` FROM `members` WHERE `phone`='$phone'";
     		$result1 = $conn->query($sql1);
			$result2 = $conn->query($sql2);
			$result3 = $conn->query($sql3);
			$result4 = $conn->query($sql4);
			$result5 = $conn->query($sql5);
			$result6 = $conn->query($sql6);
			if($result1->num_rows > 0){
				$sql="DELETE FROM `members` WHERE `firstname`='$firstname'";
				$sqlupdate1=$conn->query($sql);
				while($row1 = $result1->fetch_assoc()) {
         		$firstnamestring = "asasas";
     			}
			}
			if($result2->num_rows > 0){
				$sql="DELETE FROM `members` WHERE `lastname`='$lastname'";
				$sqlupdate1=$conn->query($sql);
				while($row2 = $result2->fetch_assoc()) {
         		$lastnamestring = $row2["lastname"];
     			}
			}
			if($result3->num_rows > 0){
				$sql="DELETE FROM `members` WHERE `email`='$email'";
				$sqlupdate1=$conn->query($sql);
				while($row3 = $result3->fetch_assoc()) {
      		   		$emailstring = $row3["email"];
    			 }
			}
			if($result4->num_rows > 0){
				$sql="DELETE FROM `members` WHERE `pass`='$password'";
				$sqlupdate1=$conn->query($sql);
				while($row4 = $result4->fetch_assoc()) {
        		 $passstring = $row4["pass"];
     			}
			}
			if($result5->num_rows > 0){
				$sql="DELETE FROM `members` WHERE `pass`='$confpassword'";
				$sqlupdate1=$conn->query($sql);
				while($row5 = $result5->fetch_assoc()) {
       		  	$confpassstring = $row5["pass"];
    	    	}
			}
			if($result6->num_rows > 0){
				$sql="DELETE FROM `members` WHERE `phone`='$phone'";
				$sqlupdate1=$conn->query($sql);
				while($row6 = $result6->fetch_assoc()) {
     		    $telephonestring = $row6["phone"];
    			}
			}  		
}
?>