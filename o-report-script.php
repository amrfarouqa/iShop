<?php
include('db.php');
if(isset($_POST['delete'])){
    $sql1="DELETE FROM `items_sold` WHERE 1";
    $result1 = mysql_query($sql1);
}
?>