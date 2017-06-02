<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "ishop";
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT `membertype` FROM `welcome`";
$sql2 = "SELECT `firstname` FROM `welcome`";
$result = $conn->query($sql);
$result2 = $conn->query($sql2);
if ($result->num_rows > 0 && $result2->num_rows > 0) {
     // output data of each row
     while($row2 = $result2->fetch_assoc()) {
         $usernameview = $row2["firstname"];
     }
     while($row = $result->fetch_assoc()){
     	$usernametype = $row["membertype"];
     }
} else {
     $usernameview = "Welcome Guest!";
}
?>